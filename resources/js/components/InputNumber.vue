<template>
    <el-input-number v-model="number" :step="10" @change="handleChange" :min="0" :max="100000"></el-input-number>
</template>
<script>
    export default {
        props: ['code', 'data', 'question'],
        data() {
            return {
                number: 0
            };
        },
        methods: {
            handleChange(value) {
                this.data[this.code] = value
            }
        },
        mounted() {
            // console.log(this.code)
            // console.log(this.data)
        }
    };
</script>
