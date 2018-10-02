@extends('layouts.app')
@section('title' , 'My Classrooms')
@section('nav')
<ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('showclasses') }}">My Classes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('/home') }}">Dashboard</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                
                                    

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> 
                                    <a class="dropdown-item" href="#"
                                       >
                                        My Playlists
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
                <div class="card-header">Join Class</div>
                
                <div class="card-body">
                    <div class="table">
                        <table style="margin:0 auto; text-align:center;font-size:1.2rem;">
                            <tr>
                                <th>Name</th>
                                <th>Grade</th>
                                <th>Teacher</th>
                                <th>Join</th>
                              
                            </tr>
                            @foreach($classes as $clas)
                                <tr>
                                    <td>{{$clas->name}} </td>
                                    <td>{{$clas->grade}} </td>
                                    <td>{{$clas->teacher->name}} </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ url('/class/join/'.$clas->id.'/') }}">
                                            <i style="display:block; color:#fff; font-size:1.5rem;" class="material-icons">
                                            add
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
