<template>
        <el-tabs v-model="activeName" @tab-click="handleClick">
            <el-tab-pane label="User" name="first">User</el-tab-pane>
            <el-tab-pane label="Config" name="second">Config</el-tab-pane>
            <el-tab-pane label="Role" name="third">Role</el-tab-pane>
            <el-tab-pane label="Task" name="fourth">Task</el-tab-pane>
        </el-tabs>
</template>

<script>
    export default {
        data() {
            return {
                activeName: 'first'
            };
        },
        props: [
            'items',
            'step'
        ],
        mounted() {
            this.update()
            console.log('Component mounted.')
        },
        methods: {
            update: function() {
                console.log(this.items)
                console.log(this.step)
            },
            handleClick(tab, event) {
                console.log(tab, event);
            }
        }
    }
</script>
