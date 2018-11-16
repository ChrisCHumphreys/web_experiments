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
                            :key="key"
                            :game-phase="gamePhase"
                            :color="assignColorToTile(row, tile)">
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
                key: 0,
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
            makeKey: function () {
                this.key = this.key + 1;
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