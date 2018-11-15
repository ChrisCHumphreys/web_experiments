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
        width: 10%;
        padding-bottom: 10%;
    }

</style>