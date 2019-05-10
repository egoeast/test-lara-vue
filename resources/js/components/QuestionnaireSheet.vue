<template>
    <div>
        <div>
            {{ name }}
        </div>
        <div>
            Лист анкеты № {{ this.$store.state.count }}
        </div>
        <div>
            <question

                    v-bind:question="questions[0]"
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