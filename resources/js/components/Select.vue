<template>
    <div>
        <el-select v-model="value" placeholder="Select" @change="handleChange">
            <el-option
                v-for="item in answers"
                :key="item.code"
                :label="item.name"
                :value="item.code">
            </el-option>
        </el-select>

        <el-select v-if="(code === 'K1' && value === 'tyra')" v-model="tura" placeholder="Select" @change="handleTura">
            <el-option
                label="1-й этаж"
                value="10">
            </el-option>
            <el-option
                label="2-й этаж"
                value="15">
            </el-option>
            <el-option
                label="3-й этаж"
                value="20">
            </el-option>
            <el-option
                label="4-й этаж"
                value="25">
            </el-option>
        </el-select>
    </div>
</template>

<script>
    export default {
        props: ['code', 'data', 'answers'],
        data() {
            return {
                value: '',
                tura: ''
            }
        },
        mounted() {
            // console.log(this.question.answers);
        },
        methods: {
            handleChange(value) {
                this.data[this.code] = value
            },
            handleTura(value) {
                this.data['tura_height'] = value
            }
        }
    }
</script>
