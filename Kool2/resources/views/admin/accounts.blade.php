@extends('layouts.app')
@section('title' , 'Accounts')
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
                <div class="card-header">Accounts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table">
                        <table style="margin:0 auto; text-align:center;">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Organization Code</th>
                                <th>Status</th>
                            </tr>
                            @foreach($orgs as $user)
                                <tr>
                                    <td>{{$user->name}} </td>
                                    <td>{{$user->email}} </td>
                                    <td>{{$user->id}} </td>
                                    <td>
                                        @if($user->is_active)
                                            <a href="{{ url('admin/deactivate/' .$user->id.'/') }}">deactivate</a>
                                        @else
                                            <a href="{{ url('admin/activate/'.$user->id.'/') }}">activate</a>
                                        @endif
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