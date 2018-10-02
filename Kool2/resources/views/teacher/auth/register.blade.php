@extends('layouts.app')
@section('title' , 'Teacher Registration')
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
                                <a class="nav-link" href="{{ route('teacher.loginForm') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-primary" style="color:#fff; margin-left:.5em;" href="{{ route('teacher.registerform') }}">Join Now</a>
                            </li>
                    </ul>
                      
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div  class="card-body users">
                    @if(count($errors) >0)
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                    @endif
                    
                    <form method="POST" action="{{ route('teacher.register') }}" aria-label="{{ __('Register') }}">
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

                                @if ($errors->has('org_code'))
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
                                <button type="submit" class="btn btn-primary btn-clock">
                                    {{ __('Register') }}
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