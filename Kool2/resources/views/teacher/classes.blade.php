@extends('layouts.app')
@section('title' , 'My Classrooms')
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
                <div class="card-header">My Classes</div>
                
                <div class="card-body">
                    <a class="btn btn-primary btn-block" href="{{ route('teacher.classform') }}"><i style="display:block; color:#fff; font-size:1.5rem;" class="material-icons">
add
</i></a>
                    <div class="table">
                        <table style="margin:0 auto; text-align:center;">
                            <tr>
                                <th>Name</th>
                                <th>Grade</th>
                              
                            </tr>
                            @foreach($classes as $clas)
                                <tr>
                                    <td>{{$clas->name}} </td>
                                    <td>{{$clas->grade}} </td>
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
