@extends('hmarkup')

@section('content')

<div class="container-fluid">

<p class="lead text-white text-center">Details for : {{$event->title}}</p>


    <div class="wrapper">
    <div class="width">
      
    <div class="clash-card__level clash-card__level--barbarian">{{$event->id}}</div>
    <div class="clash-card__unit-name">{{$event->title}}</div>
      <div class="clash-card__unit-description">
       <span class=""><p class="lead">Description: </p></span>  {!!$event->description!!}
      </div>

      <div id="map"></div>
      
      <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
        <div class="one-third">
          <div class="stat"><sup></sup></div>
          <div class="stat-value"></div>
        </div>

        <div class="one-third">
                    <div class="stat"><sup></sup></div>

          <div class="stat-value"></div>
        </div>

        <div class="one-third no-border">
        <p class="stat-name"></p>
          <div class="stat-value"></div>
        </div>

      </div>

    </div> <!-- end clash-card barbarian-->
  </div> <!-- end wrapper -->
</div>
@endsection

@section('footer-script')
<script>
function initMap() {
    var uluru={lat: {{$event->lat}}, lng:{{$event->long}}};
    var map=new google.maps.Map(document.getElementById('map'), {

        zoom:4,
        center:uluru
    });

    var marker=new google.maps.Marker({

        position:uluru,
        map: map
    });
}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&callback=initMap"
  type="text/javascript"></script>
    
@endsection

@section('header-styles')
<style>

#map{

    height: 400px;
    width: 100%;
}
</style>
    
@endsection