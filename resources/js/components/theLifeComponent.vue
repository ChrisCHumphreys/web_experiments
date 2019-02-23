<template>
    <div class="game-wrapper">
        <section id="controls">
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
                                    Run
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
                                    <a class="button is-success resize-button" v-on:click="resetSize">Resize/Clear
                                        Board</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="tile is-2 is-parent">
                        <article class="tile is-child notification is-primary">
                            <p class="title">Living Cells: {{ currentScore }}</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <the-life-board
            :height=height
            :width=width >
        </the-life-board>
    </div>
</template>

<script>
    import TheLifeBoard from './theLifeComponents/theLifeBoard';
    export default {
        name: "theLifeComponent",
        components: {TheLifeBoard},
        data: function () {
            return {
                newHeight: 30,
                newWidth: 30,
                height: 30,
                width: 30,
                gamePhase: "setup",
                currentScore: 0,
            }
        },
        methods: {
            resetSize() {
                this.height = parseInt(this.newHeight);
                this.width = parseInt(this.newWidth);
            }
        }
    }
</script>

<style scoped>
    .game-wrapper {
        margin: 30px;
    }
</style>