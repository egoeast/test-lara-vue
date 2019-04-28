<template>
    <div class="row">
        <div
                v-for="question in questions"
                v-bind:key="question"
                class="col-md-1 nav-link"
                v-on:click="next"
        >{{ question }}</div>
    </div>
</template>

<script>
    export default {
        name: "QuestionnaryNavigation",
        data: () => {
            return {
                questions :[1,2,3,4,5]
            }
        },
        methods: {
          next(ev) {
              alert('das');
          }
        }
    }
</script>

<style scoped>
    .nav-link {
        border: 1px black double;
    }
</style>