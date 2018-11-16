<template>
    <div class="game-wrapper">
        <h1 class="title is-0">
            Conway Checkers
        </h1>
        <section>
            <div class="tile is-ancestor">
                <div class="tile">
                    <div class="tile is-parent">
                        <div class="tile is-2 notification is-primary">
                                <div class="control">
                                    <p class="title">
                                        Game Phase
                                    </p>
                                    <label class="radio">
                                        <input type="radio" value="setup" v-model="gamePhase">
                                        Setup
                                    </label>
                                    <label class="radio">
                                        <input type="radio" value="play" v-model="gamePhase">
                                        Play
                                    </label>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <the-board-component
                    :game-phase="gamePhase"/>
        </section>
    </div>
</template>

<script>
    import theBoardComponent from './theCheckersComponents/theBoardComponent'

    export default {
        name: "theCheckersComponent",
        components: {
            theBoardComponent,
        },
        data: function () {
            return {
                'gamePhase': "setup"
            }
        }
    }
</script>

<style scoped>
    .game-wrapper {
        margin: 30px;
    }
</style>