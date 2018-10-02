@extends('layouts.app')
@section('title' , 'Register')
@section('nav')
<ul class="navbar-nav ml-auto">
                       
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('/portal/home') }}">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                
                                    

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> 
                                    <a class="dropdown-item" href="{{ route('teacher.classes') }}"
                                       >
                                        My Classes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('teacher.classform') }}"
                                       >
                                        Create Class
                                    </a>
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
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a Classroom</div>
                <div id="individual" class="card-body users">
                    
                    <form method="POST" action="{{ route('teacher.initclass') }}" >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Class Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="select" style="display:block; margin:auto;">
                       <select name="grade">
                        <option value="14">Kindergarten</option>
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                        <option value="4">Fourth</option>
                        <option value="5">Fifth</option>
                        <option value="6">Sixth</option>
                        <option value="7">Seventh</option>
                        <option value="8">Eighth</option>
                        <option value="9">Ninth</option>
                        <option value="10">Tenth</option>
                        <option value="11">Eleventh</option>
                        <option value="12">Twelfth</option>
                      </select>
                        </div>
                        <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Next
                                </button>
                                 
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
