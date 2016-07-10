@extends('layouts.app')

@section('content')

<?php
  if(isset(Auth::user()->dob)) {
    $dob = Auth::user()->dob;
    $dmy = str_split($dob, 2);
    $year = $dmy[0] . $dmy[1];
    $month = $dmy[2];
    $day = $dmy[3];
  }
?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h1>Welcome, {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}!</h1></div>

                <div class="panel-body">
                  <h3>Your details</h3>
                  <ul>
                    @if (isset(Auth::user()->email))
                      <li>Email: <strong>{{ Auth::user()->email }}</strong></li>
                    @endif
                    @if (isset(Auth::user()->phone))
                      <li>Mobile number: <strong>{{ Auth::user()->phone }}</strong></li>
                    @endif
                    @if (isset(Auth::user()->dob))
                      <li>Date of birth: <strong>{{ $day }}-{{ $month }}-{{ $year }}</strong></li>
                    @endif
                    @if (isset(Auth::user()->country))
                      <li>Country you're representing: <strong>{{ Auth::user()->country }}</strong></li>
                    @endif
                    @if (isset(Auth::user()->passport_number))
                      <li>Passport number: <strong>{{ Auth::user()->passport_number }}</strong></li>
                    @endif
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
