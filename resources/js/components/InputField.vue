<template>
    <div>
        <input @change="changeValue" v-model="answer" type="text"/>
        <p>Answer: {{ answer }}</p>
    </div>
</template>

<script>
    export default {
        name: "InputField",
        data: function() {
            return {
                answer: ''
            }
        },
        methods: {
            changeValue: function(e)  {
                //store.commit('increment')
                console.log(this.$store);

                //this.$emit('saveResult', this.answer);
            }
        }
    }
</script>

<style scoped>

</style>