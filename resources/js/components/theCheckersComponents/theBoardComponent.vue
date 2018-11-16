<template>
    <div class="columns is-h-scrollable">
        <div class="column">
            <div class="is-multiline is-centered"
                 v-for="row in boardHeight">
                <div class="level-item">
                    <the-tile-component
                            v-for="tile in boardWidth"
                            :x-value="row"
                            :y-value="tile"
                            :key="makeKey(row, tile)"
                            :game-phase="gamePhase"
                            :color="assignColorToTile(row, tile)"
                            v-on:move-attempted="validateMove"
                            v-on:add-piece="addPieceToCheckersArray"
                            v-on:remove-piece="removeFromCheckersArray">
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
        props: ["gamePhase", "boardHeight", "boardWidth"],
        components: {
            TheTileComponent
        },
        data: function () {
            return {
                firstSquareClicked: false,
                secondSquareClicked: false,
                checkersArray: [],
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
            addPieceToCheckersArray(location) {
                this.checkersArray.push(location);
            },
            removeFromCheckersArray(location) {
                let filtered = this.checkersArray.filter(function(item){
                    let locationString = item.x.toString() + ', ' + item.y.toString();
                    if (locationString != location) {
                        return item;
                    }
                });
                this.checkersArray = filtered;
                // this.checkersArray.remove(location);
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