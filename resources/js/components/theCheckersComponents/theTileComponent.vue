<template>
    <div class="square" :style="getColor">
        <div class="checker"></div>
    </div>
</template>

<script>
    export default {
        name: "theTileComponent",
        props: ['color', 'x-value', 'y-value'],
        data: function () {
            return {
                'is-occupied': false,
            }
        },
        computed: {
            getColor: function ()  {
                return 'background-color: ' + this.color + ';'
            }
        }
    }
</script>

<style scoped>
    .square {
        width: 75px;
        padding-bottom: 75px;
        border-style: inset;
        position: relative;
    }
    .checker {
        background-color: black;
        width: 60px;
        height: 60px;
        padding-bottom: auto;
        position: absolute;
        margin: 7px auto auto 4px;
        border-radius: 60px;
    }

</style>