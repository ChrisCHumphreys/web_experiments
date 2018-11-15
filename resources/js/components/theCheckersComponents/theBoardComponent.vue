<template>
    <div class="columns is-h-scrollable">
        <div class="column">
            <div class="is-multiline is is-centered"
                 v-for="row in this.boardHeight">
                <div class="level-item">
                    <the-tile-component
                            v-for="tile in boardWidth"
                            :key="tile"
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
        components: {
            TheTileComponent
        },
        data: function () {
            return {
                boardHeight: 100,
                boardWidth: 100,
            }
        },
        methods: {
            assignColorToTile: (row, tile) => {
                if ((row + tile) % 2 === 0) {
                    return "blue";
                } else {
                    return "red";
                }
            },
        },
    }
</script>

<style scoped>

    .is-h-scrollable {
        overflow: auto;
        white-space: nowrap;
    }

</style>