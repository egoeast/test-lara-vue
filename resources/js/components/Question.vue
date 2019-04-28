<template>
    <div>
        <p>{{ question.title }}</p>
        <InputField ></InputField>
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
        }

    }
</script>

<style scoped>

</style>