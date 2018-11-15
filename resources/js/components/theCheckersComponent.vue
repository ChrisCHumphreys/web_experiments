<template>
    <div>
        <h1 class="title is-0">
            Conway Checkers
        </h1>
        <the-board-component/>
    </div>
</template>

<script>
    import theBoardComponent from './theCheckersComponents/theBoardComponent'
    import theTileComponent from './theCheckersComponents/theTileComponent'

    export default {
        name: "theCheckersComponent",
        components: {
            theBoardComponent,
            theTileComponent,
        }
    }
</script>

<style scoped>

</style>