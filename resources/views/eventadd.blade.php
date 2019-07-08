@extends('hmarkup')

@section('content')
    <form action="{{route('event-save')}}" method="post" id="locationForm">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-white">Add new event</h3>
                    </div>
                    <div class="panel-body text-white">
                       {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="title">Event title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter the event">
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="title">Address</label>
                            <input type="text" name="address" id="address" class="form-control"
                                   placeholder="Enter the event address">
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="title">Start date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control"
                                   placeholder="Enter the event start date">
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="title">End date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control"
                                   placeholder="Enter the event end date">
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"
                                      placeholder="Enter the description" id="description"></textarea>
                            <span class="error"></span>
                        </div>

                        <button class="btn btn-outline-light">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-white">Select location</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <span class="error"></span>
                            <span class="error"></span>
                            <event-location></event-location>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('footer-script')

<script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>


<script>

CKEDITOR.replace('description')
</script>
    
@endsection