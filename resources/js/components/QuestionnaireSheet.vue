<template>
    <div>
        <div>
            {{ name }}
        </div>
        <div>
            Лист анкеты № {{ number }}
        </div>
        <div>
            <question
                title = "sadasd"></question>
        </div>
    </div>
</template>

<script>
    import InputField from "./InputField";
    import Question from "./Question";
    export default {
        name: "QuestionnaireSheet",
        components: {Question, InputField},
        number: '3',
        data: () => {
            return {
                number: '3',
                name: "One",
                title: "Фамилия"
            }
        },

        mounted() {
            console.log(this)
        }
    }
</script>

<style scoped>


</style>