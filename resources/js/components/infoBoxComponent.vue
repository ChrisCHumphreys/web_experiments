<template>
    <div>
        <div id="map"></div>
    </div>
</template>

<script>
    import GoogleMapsLoader from 'google-maps';

    export default {
        name: "infoBoxComponent",
        data: function () {
            return {
                name: "chris",
            }
        },
        methods: {
        },
        mounted: function () {
            GoogleMapsLoader.KEY = 'AIzaSyAELsIP48AlWA0IYxotTNgNIO7AWetUqMk';
            GoogleMapsLoader.VERSION = 'WEEKLY';
            GoogleMapsLoader.load(function(google) {
                let map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 8,
                    center: {lat: -34.397, lng: 150.644},
                })
            })
        }
    };
</script>

<style scoped>
    #map {
        height: 100%;
    }
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

</style>