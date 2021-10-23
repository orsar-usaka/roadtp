@extends('layouts.app', ['activePage' => 'booking', 'titlePage' => __('Booking')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('available-route') }}" autocomplete="off" class="form-horizontal">
            @csrf
            {{-- @method('put') --}}

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                <p class="card-category">{{ __('User information') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif

                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Origin') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <select name="origin_state_id" class="form-control " data-style="btn btn-link" id="state1">
                          @foreach($states as $state)
                          <option value={{$state->id}}>{{$state->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <select name="origin_lga_id" class="form-control " data-style="btn btn-link" id="city1" disabled >
                          <option value="">Select An LGA</option>
                        </select>
                      </div>



                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Destination') }}</label>
                    <div class="col-sm-7">
                        <div class="form-group">

                          <select name="destination_state_id" class="form-control " id="state2">
                              @foreach($states as $state)
                              <option value={{$state->id}}>{{$state->name}}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <select name="destination_lga_id" class="form-control " id="city2" disabled >
                              <option value="">Select An LGA</option>
                          </select>
                        </div>


                    </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Departure Date') }}</label>
                  <div class="col-md-4">
                    <div class="card ">
                      <div class="card-header card-header-rose card-header-text">
                        <div class="card-icon">
                          <i class="material-icons">today</i>
                        </div>
                        <h4 class="card-title">Date Picker</h4>
                      </div>
                      <div class="card-body ">
                        <div class="form-group bmd-form-group is-filled" >

                          <input type="text" class="form-control datepicker" id='datetimepicker3' value="" name="departure_date">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Book Ticket') }}</button>
              </div>
            </div>
          </form>


        </div>
      </div>

    </div>
  </div>
@endsection

@section('datepicker')

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format:'YYYY-MM-DD',
                icons: {
                  time: "fa fa-clock-o",
                  date: "fa fa-calendar",
                  up: "fa fa-chevron-up",
                  down: "fa fa-chevron-down",
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                },


            });
            $("#datetimepicker3").val();
        });
    </script>

    <script>
        var base_url = "{{url('/')}}"
        $(document).ready(function(){
            $('#state1').change(function(){
            var state = $('#state1').val();

            $('#city1').html('');
                $.ajax({
                url: base_url + '/getCity/' + state,
                type:'GET',
                success:function(data)
                {

                    $.each(data, function(key, city)
                    {
                    // alert(city.city_name)
                    $('#city1').prop('disabled', false).css('background','aliceblue').append('<option value="'+city.id+'">'+city.name+'</option>');
                    });
                }
            });
            });
        });
    </script>

    <script>
        var base_url = "{{url('/')}}"
        $(document).ready(function(){
            $('#state2').change(function(){
            var state = $('#state2').val();

            $('#city2').html('');
                $.ajax({
                url: base_url + '/getCity/' + state,
                type:'GET',
                success:function(data)
                {

                    $.each(data, function(key, city)
                    {
                    // alert(city.city_name)
                    $('#city2').prop('disabled', false).css('background','aliceblue').append('<option value="'+city.id+'">'+city.name+'</option>');
                    });
                }
            });
            });
        });
    </script>

@endsection

