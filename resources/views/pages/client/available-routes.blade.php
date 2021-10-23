@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('style')
    <style>
        #PaymentForm{
            display:none;
        }
    </style>
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

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
                    <div class="table-responsive">
                        <table class="table table-shopping">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th>Service</th>
                                    <th class="text-center">Vehicle Type</th>
                                    <th class="text-right">Departure</th>
                                    <th class="text-right">Arrival</th>
                                    <th class="text-right">Duration</th>
                                    <th class="text-right">Available Seats</th>
                                    <th class="text-right">Ticket Qty</th>
                                    <th class="text-right">Amount</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($available_vehicles as $available_vehicle)
                                <tr>
                                    <td>
                                        <div class="img-container">
                                            <img src="https://images.thenorthface.com/is/image/TheNorthFace/NF0A2VFL_619_hero" alt="...">
                                        </div>
                                    </td>
                                    <td class="td-name">
                                        <a href="#"> {{$available_vehicle->name}} </a>
                                        <br><small>by Dolce&amp;Gabbana</small>
                                    </td>
                                    <td>
                                        RMX-166
                                    </td>
                                    <td class="td-number">
                                        {{$available_vehicle->take_off_time}}
                                    </td>
                                    <td class="td-number">
                                        08:00
                                    </td>
                                    <td class="td-number">
                                        8 hours
                                    </td>
                                    <td class="td-number">
                                        8
                                    </td>
                                    <td class="td-number">
                                        <p id="clicks"></p>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-round btn-info btn-sm" onClick="minus()"> <i class="material-icons">remove</i> </button>
                                            <button type="button" class="btn btn-round btn-info btn-sm" onClick="plus()"> <i class="material-icons">add</i> </button>
                                        </div>
                                    </td>
                                    <td class="td-number">
                                        <small>N</small>{{$available_vehicle->price}}
                                    </td>
                                    <td class="td-actions">
                                        <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-simple">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    No routes
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>

              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="button" class="btn btn-primary" onclick="PaymentForm()">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="row" id="PaymentForm">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Change password') }}</h4>
                <p class="card-category">{{ __('Password') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status_password'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status_password') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                      @if ($errors->has('old_password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('datepicker')
    <script>
        var clicks = 1;
        document.getElementById("clicks").innerText = clicks;
        function plus() {
            clicks += 1;
            document.getElementById("clicks").innerText = clicks;
        };

        function minus() {
            if (clicks != 1) {
                clicks -= 1;
                document.getElementById("clicks").innerText = clicks;
            }else{
                return
            }

        };

        const form = document.getElementById('PaymentForm');
        form.style.display = "none";
        function PaymentForm() {

            if ( form.style.display === "none"){
                form.style.display = "block";
            } else{
                form.style.display = "none";
            }
        }
    </script>
@endsection
