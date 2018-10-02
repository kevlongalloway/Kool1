@extends('layouts.app')
@section('title' , 'Register')
@section('nav')
<ul class="navbar-nav ml-auto">
                       
                            <li class="nav-item">
                               <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/our-team') }}">Our Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/the-proof') }}">The Proof</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/course-songs') }}">Course Songs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/subscriptions') }}">Subscriptions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-primary" style="color:#fff; margin-left:.5em;" href="{{ route('register') }}">Join Now</a>
                            </li>
                    </ul>
                      
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                
                <div class="w3-bar">
                    <button class="tablink btn-primary btn" onclick="showForm(event,'individual')">Individual</button>
                    <button class="tablink btn" onclick="showForm(event,'student')">Student</button>
                </div>
                
                <div id="individual" class="card-body users">
                    
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group row" style="display:none;">
                            <label for="orgcode" class="col-md-4 col-form-label text-md-right">Organization Code</label>

                            <div class="col-md-6" >
                                <input id="orgcode" type="text" class="form-control{{ $errors->has('orgcode') ? ' is-invalid' : '' }}" name="orgcode">

                                @if ($errors->has('orgcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('orgcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Next
                                </button>
                                 <span><a href="/login" style="padding:1em;">Already have an account?</a></span>
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div id="student" class="card-body users"  style="display:none;">
                    
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="orgcode" class="col-md-4 col-form-label text-md-right">Organization Code</label>

                            <div class="col-md-6">
                                <input id="orgcode" type="orgcode" class="form-control{{ $errors->has('orgcode') ? ' is-invalid' : '' }}" name="orgcode" value="{{ old('orgcode') }}" required>

                                @if ($errors->has('orgcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('orgcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button> 
                                 <span><a href="/login" style="padding:1em;">Already have an account?</a></span>
                            </div>
                        </div>
                    </form>
                   
                </div>
               
                
                
                
            </div>
        </div>
    </div>
</div>
<script>
    function showForm(evt,usertype) {
    var i;
    var x = document.getElementsByClassName("users");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    document.getElementById(usertype).style.display = "block"; 
  
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" btn-primary", "");
    }
    document.getElementById(usertype).style.display = "block";
    evt.currentTarget.className += " btn-primary";
    }
</script>
@endsection
