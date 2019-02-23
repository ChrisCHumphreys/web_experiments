<template>
    <div>
    <div class="is-multiline is-centered" v-for="row in height">
        <div class="level-item">
            <the-cell-component
                v-for="tile in width"
                :x-value="tile"
                :y-value="row"
                :key="makeKey(row, tile)">
            </the-cell-component>
        </div>
    </div>
    </div>
</template>

<script>
    import TheCellComponent from './theCellComponent';
    export default {
        name: "theLifeBoard",
        props: ["height", "width"],
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
        }
    }
</script>

<style scoped>

</style>