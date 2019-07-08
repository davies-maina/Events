@extends('layouts.app')

@section('content')
<form action="{{route('profile-save')}}" method="post">
        <div class="row">
            <div class="col-sm-4 mx-3 col-sm-push-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-white">My profile</h3>
                    </div>
                    <div class="panel-body text-white">
                       {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="title">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{old('name', $user->name)}}">
                            
                        </div>

                        <div class="form-group">

                    <label for="email">Email</label>
                <input type="text"  id="email" class="form-control" value="{{$user->email}}" disabled>
                </div>

                <div class="form-group">

                    <event-location></event-location>
                </div>
                
                <div class="form-group">

                    <button class="btn btn-success"> Save</button>


                </div>
                    </div>
                </div>
            </div>


    </form>
@endsection