@extends('layouts.app')
@section('title' , 'Admin Home')
@section('nav')
<ul class="navbar-nav ml-auto">
                       
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('/admin/home') }}">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                
                                    

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> 
                                    <a class="dropdown-item" href="{{ route('admin.users') }}"
                                       >
                                        User Dashboard
                                    </a>
                                    <a class="dropdown-item" href="{{ route('admin.createorg') }}"
                                       >
                                        Create Organization
                                    </a>
                                    <a class="dropdown-item" href="{{ route('admin.songs') }}"
                                       >
                                        Songs
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('admin.uploadsong') }}"
                                       >
                                        Upload Songs
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
                <div class="card-header"></div>

                <div class="card-body">
                    @foreach($song as $data)
                    <h1>{{ $data->title }}</h1>
                    <iframe width="560" height="315" src="{{ $data->link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <p style="max-width:50%;">{{ $data->description }}</p>
                
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

