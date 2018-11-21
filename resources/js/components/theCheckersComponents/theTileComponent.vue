<template>
    <div class="square"
         :style="getColor"
         v-on:click="updateSquare">
        <div v-if="isOccupied" class="checker"></div>
    </div>
</template>

<script>
    export default {
        name: "theTileComponent",
        props: ['color', 'xValue', 'yValue', 'gamePhase', 'isOccupied'],
        data: function () {
            return {
            }
        },
        methods: {
            updateSquare: function() {
                if (this.gamePhase === "setup") {
                    if (this.isOccupied) {
                        this.$emit('remove-piece', {x: this.xValue, y: this.yValue});
                    } else {
                        this.$emit('add-piece', {x: this.xValue, y: this.yValue});
                    }
                } else {
                    this.$emit('move-attempted', {
                        "column": this.xValue,
                        "row": this.yValue,
                        "isOccupied": this.isOccupied,
                    })
                }
            },
        },
        computed: {
            getColor: function () {
                return 'background-color: ' + this.color + ';'
            },
        }
    }
</script>

<style scoped>
    .square {
        width: 40px;
        padding-bottom: 40px;
        border-style: inset;
        position: relative;
    }

    .checker {
        background-color: black;
        width: 25px;
        height: 25px;
        padding-bottom: auto;
        position: absolute;
        margin: 7px auto auto 4px;
        border-radius: 60px;
    }

</style>