<template>
    <div class="container">

        <label for="location">Location</label>

        <div id="location">

            <gmap-autocomplete @place_changed="setPlace" class="form-control mb-2"></gmap-autocomplete>
            <GmapMap
  :center="{lat:10, lng:10}"
  :zoom="7"
  
  style="width: 100%; height: 300px"
>
  <GmapMarker
    
    
    :position="location"
    :clickable="true"
    :draggable="true"
    @click="center=location"
    @place_changed="setPlace"
    @position_changed="markerDrag($event)"
    
  />
</GmapMap>
        </div>
    <input type="hidden" v-model="location.lat" name="lat">
    <input type="hidden" v-model="location.lng" name="long">
    </div>
</template>


<script>

import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyB0T-uGFTd8aQ_a7mZmhN0hX9F5dhVUeH4',
        libraries: 'places', // This is required if you use the Autocomplete plugin
        // OR: libraries: 'places,drawing'
        // OR: libraries: 'places,drawing,visualization'
        // (as you require)

        //// If you want to set the version, you can do so:
        // v: '3.26',
    },


});

export default {
    

    data(){

        return{


            location:{

                lat: 22.538948,
                lng:88.332537,

            },

            markers: [{
          position: {lat: 10.0, lng: 10.0}
        }]
        }
    },


    methods :{


        setPlace(place){
            this.location = {
          lat: place.geometry.location.lat(),
          lng: place.geometry.location.lng()
        }

        },

        markerDrag(position){

            this.location = {
          lat: position.lat(),
          lng: position.lng()
        }

        }
    }
}
</script>
