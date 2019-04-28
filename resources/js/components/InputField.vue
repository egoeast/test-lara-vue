<template>
    <div>
        <input v-model="answer" type="text"/>
        <p>Answer: {{ answer }}</p>
    </div>
</template>

<script>
    export default {
        name: "InputField",
        data: () => {
            return {
                answer: ''
            }
        },
        methods: {
            changeValue: (e) => {
                console.log(answer)
                //this.answer = e.target.value;
            }
        }
    }
</script>

<style scoped>

</style>