<template>
    <div>
        <p>{{ title }}</p>
        <InputField></InputField>
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
            title: String
        }

    }
</script>

<style scoped>

</style>