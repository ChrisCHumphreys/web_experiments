<template>
    <div>
        <section class="section">
            <div class="container">
                <div class="level">
                    <the-tile-component
                            color="red">
                    </the-tile-component>
                    <the-tile-component
                            color="blue">
                    </the-tile-component>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import TheTileComponent from "./theTileComponent";

    export default {
        name: "theBoardComponent",
        components: {
            TheTileComponent
        }
    }
</script>

<style scoped>

</style>