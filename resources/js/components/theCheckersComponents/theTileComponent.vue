<template>
        <div class="square" :style="getColor">
        </div>
</template>

<script>
    export default {
        name: "theTileComponent",
        props: ['color'],
        computed: {
            getColor: function ()  {
                return 'background-color: ' + this.color + ';'
            }
        }
    }
</script>

<style scoped>
    .square {
        width: 5%;
        padding-bottom: 5%;
        border-style: inset;
    }

</style>