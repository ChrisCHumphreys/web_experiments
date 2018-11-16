<template>
    <div class="columns is-h-scrollable">
        <div class="column">
            <div class="is-multiline is-centered"
                 v-for="row in boardHeight">
                <div class="level-item">
                    <the-tile-component
                            v-for="tile in boardWidth"
                            :x-value="tile"
                            :y-value="row"
                            :key="makeKey(row, tile)"
                            :game-phase="gamePhase"
                            :color="assignColorToTile(row, tile)"
                            :is-occupied="checkIfOccupied(tile, row)"
                            v-on:move-attempted="validateMove"
                            v-on:add-piece="broadcastAddPiece"
                            v-on:remove-piece="broadcastRemovePiece">
                    </the-tile-component>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import TheTileComponent from "./theTileComponent";

    export default {
        name: "theBoardComponent",
        props: ["gamePhase", "boardHeight", "boardWidth", "occupiedSquares"],
        components: {
            TheTileComponent
        },
        data: function () {
            return {
            }
        },
        methods: {
            assignColorToTile: function (row, tile) {
                if ((row + tile) % 2 === 0) {
                    return "blue";
                } else {
                    return "red";
                }
            },
            makeKey: function (row, tile) {
                return (row.toString() + ', ' + tile.toString())
            },
            validateMove: function (tileData) {
                console.log(tileData.row)
            },
            broadcastAddPiece(location) {
                this.$emit('add-piece', location);
            },
            broadcastRemovePiece(location) {
                this.$emit('remove-piece', location);
            },
            checkIfOccupied(tile, row) {
                let hasPiece = false;
                this.occupiedSquares.forEach(function(item) {
                    if (tile == item.x && row == item.y) {
                        hasPiece =  true;
                    }
                });
                return hasPiece;
            }
        },
    }
</script>

<style scoped>

    .is-h-scrollable {
        overflow: auto;
        white-space: nowrap;
    }

</style>