<template>
    <el-form :model="calculator" :rules="rules" ref="ruleForm" label-width="120px" class="demo-ruleForm">
        <el-form-item label="Вид услуги" prop="type" v-show="step === 0">
            <el-select v-model="calculator.type" placeholder="Вид услуги">
                <el-option label="Мойка остекления" value="glazing"></el-option>
            </el-select>
        </el-form-item>



        <el-form-item label="Activity name" prop="name">
            <el-input v-model="calculator.name"></el-input>
        </el-form-item>
        <el-form-item label="Activity zone" prop="region">
            <el-select v-model="calculator.region" placeholder="Activity zone">
                <el-option label="Zone one" value="shanghai"></el-option>
                <el-option label="Zone two" value="beijing"></el-option>
            </el-select>
        </el-form-item>
        <el-form-item label="Activity time" required>
            <el-col :span="11">
                <el-form-item prop="date1">
                    <el-date-picker type="date" placeholder="Pick a date" v-model="calculator.date1" style="width: 100%;"></el-date-picker>
                </el-form-item>
            </el-col>
            <el-col class="line" :span="2">-</el-col>
            <el-col :span="11">
                <el-form-item prop="date2">
                    <el-time-picker type="fixed-time" placeholder="Pick a time" v-model="calculator.date2" style="width: 100%;"></el-time-picker>
                </el-form-item>
            </el-col>
        </el-form-item>
        <el-form-item label="Instant delivery" prop="delivery">
            <el-switch v-model="calculator.delivery"></el-switch>
        </el-form-item>
        <el-form-item label="Activity type" prop="oldtype">
            <el-checkbox-group v-model="calculator.oldtype">
                <el-checkbox label="Online activities" name="oldtype"></el-checkbox>
                <el-checkbox label="Promotion activities" name="oldtype"></el-checkbox>
                <el-checkbox label="Offline activities" name="oldtype"></el-checkbox>
                <el-checkbox label="Simple brand exposure" name="oldtype"></el-checkbox>
            </el-checkbox-group>
        </el-form-item>
        <el-form-item label="Resources" prop="resource">
            <el-radio-group v-model="calculator.resource">
                <el-radio label="Sponsorship"></el-radio>
                <el-radio label="Venue"></el-radio>
            </el-radio-group>
        </el-form-item>
        <el-form-item label="Activity form" prop="desc">
            <el-input type="textarea" v-model="calculator.desc"></el-input>
        </el-form-item>
        <el-form-item>
            <el-button type="primary" @click="submitForm('ruleForm')">Create</el-button>
            <el-button @click="resetForm('ruleForm')">Reset</el-button>
        </el-form-item>
    </el-form>
</template>

<script>
    export default {
        data() {
            return {
                calculator: {
                    type: 'glazing',
                    region: '',
                    date1: '',
                    date2: '',
                    delivery: false,
                    oldtype: [],
                    resource: '',
                    desc: ''
                },
                rules: {
                    type: [
                        { required: true, message: 'Выберите тип услуги', trigger: 'blur' },
                    ],
                    name: [
                        { required: true, message: 'Please input Activity name', trigger: 'blur' },
                        { min: 3, max: 5, message: 'Length should be 3 to 5', trigger: 'blur' }
                    ],
                    region: [
                        { required: true, message: 'Please select Activity zone', trigger: 'change' }
                    ],
                    date1: [
                        { type: 'date', required: true, message: 'Please pick a date', trigger: 'change' }
                    ],
                    date2: [
                        { type: 'date', required: true, message: 'Please pick a time', trigger: 'change' }
                    ],
                    oldtype: [
                        { type: 'array', required: true, message: 'Please select at least one activity type', trigger: 'change' }
                    ],
                    resource: [
                        { required: true, message: 'Please select activity resource', trigger: 'change' }
                    ],
                    desc: [
                        { required: true, message: 'Please input activity form', trigger: 'blur' }
                    ]
                },
                step: 0,
            };
        },
        methods: {
            submitForm(formName) {
                this.$refs[formName].validate((valid) => {
                    if (valid) {
                        alert('submit!');
                    } else {
                        console.log('error submit!!');
                        return false;
                    }
                });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            }
        }
    }
</script>
