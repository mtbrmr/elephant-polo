@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Your mobile number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('day') xor $errors->has('month') xor $errors->has('year') ? ' has-error' : '' }}">
                            <label for="day" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">

                                <div class="col-sm-4">
                                  <select id="day" class="form-control dob" name="day">
                                    <option value="">Day</option>
                                    @for ($day = 1; $day <= 31; $day++)
                                      <option value="{{ $day < 10 ? '0' . $day : $day }}">{{ $day < 10 ? '0' . $day : $day }}</option>
                                    @endfor
                                  </select>
                                </div>

                                <div class="col-sm-4">
                                  <select id="month" class="form-control dob" name="month">
                                    <option value="">Month</option>
                                    @for ($month = 1; $month <= 12; $month++)
                                      <option value="{{ $month < 10 ? '0' . $month : $month }}">{{ $month < 10 ? '0' . $month : $month }}</option>
                                    @endfor
                                  </select>
                                </div>

                                <div class="col-sm-4">
                                  <select id="year" class="form-control dob" name="year">
                                    <option value="">Year</option>
                                    @for ($year = 2016; $year >= 1900; $year--)
                                      <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                  </select>
                                </div>

                                @if ($errors->has('day'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('day') }}</strong>
                                    </span>
                                @endif

                                @if ($errors->has('month'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('month') }}</strong>
                                    </span>
                                @endif

                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country you're representing</label>

                            <div class="col-md-6">
                              <?php $countries = array('England', 'Wales', 'Scotland', 'Northern Ireland', 'Republic of Ireland'); ?>

                              <select id="country" class="form-control" name="country">
                                <option value="">Country</option>
                                @foreach ($countries as $country)
                                  <option value="{{ $country }}">{{ $country }}</option>
                                @endforeach
                              </select>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('passport_number') ? ' has-error' : '' }}">
                            <label for="passport_number" class="col-md-4 control-label">Passport number</label>

                            <div class="col-md-6">
                                <input id="passport_number" type="text" class="form-control" name="passport_number" value="{{ old('passport_number') }}">

                                @if ($errors->has('passport_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('passport_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
