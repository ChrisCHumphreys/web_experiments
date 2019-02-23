<template>
    <div class="square"
         v-bind:style="getColor"
         v-on:click="updateSquare">
    </div>
</template>

<script>

    export default {
        name: "theCellComponent",
        props: ['isAlive', 'xValue', 'yValue'],
        data: function () {
            return {
            }
        },
        methods: {
            updateSquare: function() {
                if (!this.isAlive) {
                    this.$emit('add-piece', {x: this.xValue, y: this.yValue});
                } else {
                    this.$emit('remove-piece', {x: this.xValue, y: this.yValue});
                }
            }
        },
        computed: {
            getColor: function () {
                if (this.isAlive == true) {
                    return 'background-color: green;';
                } else {
                    return 'background-color: white;';
                }
            },
        }
    }
</script>

<style scoped>
    .square {
        width: 40px;
        padding-bottom: 40px;
        border: 2px solid grey;
        position: relative;
    }
</style>