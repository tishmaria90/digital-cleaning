<template>
    <div>
        <InputNumber v-if="question.question_type === 'number'"></InputNumber>
        <Select v-if="question.question_type === 'select'" :question="question"></Select>
        <Checkbox v-if="question.question_type === 'checkbox'" :question="question"></Checkbox>
    </div>
</template>
<script>
    export default {
        props: [
            'question'
        ],
        mounted() {
            // console.log(this.question);
        }
    };
</script>
