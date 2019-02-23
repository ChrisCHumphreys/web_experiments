<template>
    <div class="board-wrapper">
    <div class="is-multiline is-centered" v-for="row in height">
        <div class="level-item">
            <the-cell-component
                v-for="tile in width"
                :x-value="tile"
                :y-value="row"
                :is-alive="checkIfLiving(row, tile)"
                :key="makeKey(row, tile)"
                v-on:add-piece="broadcastAddPiece"
                v-on:remove-piece="broadcastRemovePiece"
                :game-phase="gamePhase">
            </the-cell-component>
        </div>
    </div>
    </div>
</template>

<script>
    import TheCellComponent from './theCellComponent';
    export default {
        name: "theLifeBoard",
        props: ["height", "width", "livingCells", "gamePhase"],
        components: {
            TheCellComponent,
        },
        data: function() {
            return {
            }
        },
        methods: {
            makeKey: function (row, tile) {
                return (row.toString() + ', ' + tile.toString())
            },
            broadcastAddPiece: function (addMessage) {
                this.$emit('add-piece', {x: addMessage.x, y: addMessage.y});
            },
            broadcastRemovePiece: function (removeMessage) {
                this.$emit('remove-piece', {x: removeMessage.x, y: removeMessage.y});
            },
            checkIfLiving: function (row, tile) {
                let living = false;
                this.livingCells.forEach(function(item) {
                    if (tile == item.x && row == item.y) {
                        living =  true;
                    }
                });
                return living;
            },
        },
        computed: {

        }
    }
</script>

<style scoped>
    .board-wrapper {
        margin-top: 10px;
    }
</style>