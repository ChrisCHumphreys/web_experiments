<template>
    <div class="square"
         :style="getColor"
         v-on:click="toggleCheckerPiece">
        <div v-if="isOccupied" class="checker"></div>
    </div>
</template>

<script>
    export default {
        name: "theTileComponent",
        props: ['color', 'xValue', 'yValue', 'gamePhase'],
        data: function () {
            return {
                'isOccupied': false,
            }
        },
        methods: {
            toggleCheckerPiece: function() {
                if (this.gamePhase === "setup") {
                    return this.isOccupied ? this.isOccupied = false : this.isOccupied = true;
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
        width: 75px;
        padding-bottom: 75px;
        border-style: inset;
        position: relative;
    }

    .checker {
        background-color: black;
        width: 60px;
        height: 60px;
        padding-bottom: auto;
        position: absolute;
        margin: 7px auto auto 4px;
        border-radius: 60px;
    }

</style>