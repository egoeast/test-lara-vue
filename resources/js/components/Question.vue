<template>
    <div>
        <p>{{ question.title }}</p>
        <InputField @saveResult="saveResult" ></InputField>
    </div>
</template>

<script>
    import InputField from "./InputField";
    export default {
        name: "Question",
        components: {InputField},
        data: () => {
            return {
                type: 'text'
            }
        },
        props: {
            question: Object
        },
        mounted() {
            //console.log(this)
        },
        methods: {
            saveResult(result) {
                this.$store.commit('increment');
                console.log(result)
            }
        }

    }
</script>

<style scoped>

</style>