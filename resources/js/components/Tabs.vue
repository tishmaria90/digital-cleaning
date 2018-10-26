<template>
    <el-tabs v-model="active" @tab-click="tabClick">
        <el-tab-pane
            v-for="(group, key) in groups"
            :label="group.name"
            :data-id="group.id"
            :key="group.id">
            <p
                v-for="question in questions"
                :key="question.id"
                :question="question">
                <InputNumber
                    v-if="question.question_type === 'number'"
                    :data="data"
                    :code="question.code"
                    :question="question"
                ></InputNumber>
                <Select
                    v-if="question.question_type === 'select'"
                    :answers="question.answers"
                    :data="data"
                    :code="question.code"
                    :question="question"
                ></Select>
                <Checkbox
                    v-if="question.question_type === 'checkbox'"
                    :data="data"
                    :code="question.code"
                    :question="question"
                ></Checkbox>
            </p>
            <el-button @click="buttonClick">Next</el-button>
        </el-tab-pane>
    </el-tabs>
</template>
<script>
    export default {
        //props: ['data'],
        data() {
            return {
                data: {},
                active: 0,
                groups: [],
                questions: [],
                in_process: false
            };
        },
        mounted() {
            this.loadGroups()
            // this.current_group = groups[0].id
            this.loadQuestions(0)
        },
        methods: {
            tabClick(tab, event) {
                this.loadQuestions(tab.$attrs['data-id'])
            },
            buttonClick() {
                if (parseInt(parseInt(this.active) + 1) == this.groups.length) {
                    this.submit()
                } else {
                    $('#tab-'+ parseInt(parseInt(this.active) + 1)).click()
                }
            },
            loadGroups() {
                this.in_process = true
                axios.post('/public/load_groups').then((response) => {
                    this.groups = response.data
                    this.in_process = false
                }).catch(error => console.log(error));
            },
            loadQuestions(group) {
                // alert('/public/load_questions/' + group);
                this.in_process = true
                axios.post('/public/load_questions/' + group).then((response) => {
                    this.questions = response.data
                    this.in_process = false
                    // console.log(this.questions);
                }).catch(error => console.log(error));
            },
            submit(){
                axios.post(`/test`, this.data)
                    .then((response) => {
                        console.log(response);

                        $('#info-wrapper').html(response.data);
                    })
                    .catch(error => console.log(error));
            }
        }
    };
</script>
