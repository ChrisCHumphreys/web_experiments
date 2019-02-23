<template>
    <div class="square"
         :style="getColor"
         v-on:click="updateSquare">
    </div>
</template>

<script>

    export default {
        name: "theCellComponent",
        props: ['isAlive'],
        data: function () {
            return {
                'alive': this.isAlive,
            }
        },
        methods: {
            getColor: function () {
                if (this.alive) {
                    return 'background-color: green;';
                } else {
                    return 'background-color: white;';
                }
            },
            updateSquare: function() {
                this.alive = true;
            }
        }
    }
</script>

<style scoped>
    .square {
        width: 40px;
        padding-bottom: 40px;
        border: 2px solid grey;
        position: relative;
        background-color: lightgreen;
    }
</style>