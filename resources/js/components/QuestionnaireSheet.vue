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
                    v-for="question in questions"
                    v-bind:key="question.id"
                    v-bind:question="question"
                ></question>
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
                title: "Фамилия",
                questions: []
            }
        },

        mounted() {
            let app = this;
            axios.get('/api/v1/questionary')
                .then((response) => {
                    app.questions = response.data;
                })
                .catch((response) => {
                    console.log(response);
                    alert("Error");
                })
        }
    }
</script>

<style scoped>


</style>