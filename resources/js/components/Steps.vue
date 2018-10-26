<template>
    <div>
        <el-steps :active="active" finish-status="success">
            <el-step
                v-for="group in groups"
                :title="group.name"
                :key="group.id"
                @click="tab(active)"></el-step>
        </el-steps>

        <p>
            <CalcField
                v-for="question in questions"
                :key="question.id"
                :question="question"
            ></CalcField>
        </p>

        <el-button style="margin-top: 12px;" @click="next">Next step</el-button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                active: 0,
                groups: [],
                questions: [],
                in_process: false
            };
        },
        mounted() {
            this.loadGroups()
            this.loadQuestions(0)
        },
        methods: {
            next() {
                if (this.active++ > this.groups.length) this.active = 0
                console.log(this.groups);
                console.log(this.active);
                this.loadQuestions(this.groups[this.active].id)
            },
            tab(active) {
                // if (this.active++ > this.groups.length) this.active = 0
                // console.log(this.groups);
                // console.log(this.active);
                // this.loadQuestions(group_id)
                // this.active = group_id;
                console.log(active);
            },
            loadGroups() {
                this.in_process = true
                axios.post('/public/load_groups').then((response) => {
                    this.groups = response.data
                    this.in_process = false
                }).catch(error => console.log(error))
            },
            loadQuestions(group) {
                this.in_process = true
                axios.post('/public/load_questions/' + group).then((response) => {
                    this.questions = response.data
                    this.in_process = false
                    console.log(this.questions);
                }).catch(error => console.log(error));
            }
        }
    }
</script>
