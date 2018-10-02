@extends('layouts.app')
@section('nav')
                   <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
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
                           
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                         
                    </ul>
@endsection
@section('title' , 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inactive</div>
                
                <div class="card-body">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Your Account is inactive. 
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
