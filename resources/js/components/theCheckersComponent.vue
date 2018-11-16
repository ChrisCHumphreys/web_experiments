<template>
    <div class="game-wrapper">
        <h1 class="title">
            Conway Checkers
        </h1>
        <section>
            <div class="tile is-ancestor">
                <div class="tile is-12">
                    <div class="tile is-2 is-parent">
                        <article class="tile is-child notification is-primary">
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
                        </article>
                    </div>
                    <div class="tile is-2 is-parent">
                        <article class="tile is-child notification is-primary">
                            <p class="title">Board Size</p>
                            <div class="field">
                                <div class="control">
                                    <label for="height">Height</label>
                                    <input class="input is-primary" id="height" type="text"
                                           v-model="newHeight">
                                    <label for="width">Width</label>
                                    <input class="input is-primary" id="width" type="text"
                                           v-model="newWidth">
                                    <a class="button is-success resize-button" v-on:click="resetSize">Resize Board</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <the-board-component
                    :game-phase="gamePhase"
                    :board-height="boardHeight"
                    :board-width="boardWidth"/>
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
                'gamePhase': "setup",
                'boardHeight': 10,
                'boardWidth': 10,
                'newHeight': 10,
                'newWidth': 10,
            }
        },
        methods: {
            resetSize() {
                this.boardHeight = parseInt(this.newHeight, 10);
                this.boardWidth = parseInt(this.newWidth, 10);
            },
        }
    }
</script>

<style scoped>

    .game-wrapper {
        margin: 30px;
    }

    .resize-button {
        margin-top: 5px;
    }

</style>