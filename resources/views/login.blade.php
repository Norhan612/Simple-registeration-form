@extends('layout')

@section('content')
    


    <div class="container-field">

        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger ">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach
        </ul>
        
        </div>   
        @endif

        <div class="testbox">
        <h1>Login</h1>

        <form method="post" action="{{url('/postlogin')}}">
          
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <hr>
        

            <br><br>

        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input type="email" name="email" id="name" placeholder="Email" required/>

        <label id="icon" for="name"><i class="icon-shield"></i></label>
        <input type="password" name="password" id="name" placeholder="Password" required/>

        <br><br><br><br>
        <input type="submit" value="Login" class="btn btn-success">
        <a href="{{url('/register')}}" class="btn btn-danger">Sign up</a>
        </form>

        </div>
    </div>    
  @stop