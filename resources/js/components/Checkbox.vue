<template>
    <!-- `checked` should be true or false -->
    <el-checkbox v-model="checked" @change="handleChange">{{question.name}}</el-checkbox>
</template>
<script>
    export default {
        props: ['code', 'data', 'question'],
        data() {
            return {
                checked: false
            };
        },
        methods: {
            handleChange() {
                this.data[this.code] = this.checked
            }
        }
    };
</script>
