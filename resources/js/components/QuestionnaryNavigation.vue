<template>
    <div class="row">
        <div
                v-for="question in questions"
                v-bind:key="question"
                class="col-md-1 nav-link"
                v-on:click="next(question)"
        >{{ question }}</div>
    </div>
</template>

<script>
    export default {
        name: "QuestionnaryNavigation",
        data: () => {
            return {
                questions :[1,2,3,4]
            }
        },
        methods: {
          next(key, arg) {
              this.$store.commit('increment', key);
              console.log(arg);
          }
        }
    }
</script>

<style scoped>
    .nav-link {
        border: 1px black double;
    }
</style>