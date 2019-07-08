@extends('hmarkup')

@section('content')





<section class="body">
    <h4 class="display-3 text-white">Upcoming Events</h4>

    <div class="container mb-3">

    <a href="{{route('event-add')}}"><button class="btn btn-outline-dark offset-7">Add Event</button></a>
      </div>
  
      <div class="slide-container">
   @foreach ($upcomingEvents as $upcomingEvent)

   
    
  <div class="wrapper">
    <div class="clash-card barbarian">
      <div class="clash-card__image clash-card__image--barbarian">
        <img src="images/archer.png" />
      </div>
      <div class="clash-card__level clash-card__level--barbarian">{{$upcomingEvent->id}}</div>
      <div class="clash-card__unit-name"> {{$upcomingEvent->title}} </div>
      <div class="clash-card__unit-description">
        <div class="lead">
        <p>{{$upcomingEvent->address}}</p>
        </div>
        {!! limit_words($upcomingEvent->description,20) !!}
      </div>
 <div class="container mb-3">
<a href="{{route('event-show',$upcomingEvent->slug)}}"><button type="button" class="btn btn-outline-dark">View details</button></a>
      </div>

      <div class="container mb-3">

        @if ($upcomingEvent->user===null)
            

      <event-registration text="Register" mode="btn btn-outline-info" event-id="{{$upcomingEvent->id}}"></event-registration>
            @else

            <event-registration text="Unregister" mode="btn btn-outline-danger" event-id="{{$upcomingEvent->id}}"></event-registration>
        @endif

        

      </div>

      <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
        <div class="one-third">
          <div class="stat">{{\Carbon\Carbon::parse($upcomingEvent->start_date)->format('F')}}<sup>{{\Carbon\Carbon::parse($upcomingEvent->start_date)->format('d')}}</sup></div>
          <div class="stat-value">Start Date</div>
        </div>

        <div class="one-third">
                    <div class="stat">{{\Carbon\Carbon::parse($upcomingEvent->end_date)->format('F')}}<sup>{{\Carbon\Carbon::parse($upcomingEvent->end_date)->format('d')}}</sup></div>

          <div class="stat-value">End Date</div>
        </div>

        <div class="one-third no-border">
        <p class="stat-name">{{$upcomingEvent->users->name}}</p>
          <div class="stat-value">By:</div>
        </div>

      </div>

    </div> <!-- end clash-card barbarian-->
  </div> <!-- end wrapper -->
  @endforeach
</div>

    
{{-- past events
 --}}
<h3 class="display-4 text-white">Past Events</h3>

  <div class="slide-container">
    @if (count($pastEvents)==0)
    <h1 class="display-4 text-white">No past events found<h1>
      @else
        @foreach ($pastEvents as $pastEvent)

  <div class="wrapper">
    <div class="clash-card barbarian">
      <div class="clash-card__image clash-card__image--barbarian">
        <img src="images/archer.png" />
      </div>
      <div class="clash-card__level clash-card__level--barbarian">{{$pastEvent->id}}</div>
      <div class="clash-card__unit-name"> {{$pastEvent->title}} </div>
      <div class="clash-card__unit-description">
        {!! limit_words($pastEvent->description,20) !!}
      </div>
      <div class="container mb-3">
      <a href="{{route('event-show',$pastEvent->slug)}}"><button type="button" class="btn btn-outline-dark">View details</button></a>
      </div>

      <div class="container mb-3">

        

      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
        <div class="one-third">
          <div class="stat">{{\Carbon\Carbon::parse($pastEvent->start_date)->format('F')}}<sup>{{\Carbon\Carbon::parse($pastEvent->start_date)->format('d')}}</sup></div>
          <div class="stat-value">Start Date</div>
        </div>

        <div class="one-third">
                    <div class="stat">{{\Carbon\Carbon::parse($pastEvent->end_date)->format('F')}}<sup>{{\Carbon\Carbon::parse($pastEvent->end_date)->format('d')}}</sup></div>

          <div class="stat-value">End Date</div>
        </div>

        <div class="one-third no-border">
        <p class="stat-name">{{$pastEvent->users->name}}</p>
          <div class="stat-value">By:</div>
        </div>

      </div>

    </div> <!-- end clash-card barbarian-->
  </div> <!-- end wrapper -->
  @endforeach
    @endif
   
</div>
</section>

  @endsection