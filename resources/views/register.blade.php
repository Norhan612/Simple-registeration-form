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
            <h1>Registration</h1>

            <form method="post" action="{{url('/postregister')}}">
            
            @csrf
                                                    <!-- always below line is written immediate after form to avoid token mismatch  --> 
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <hr>
            
                
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Name" required/>

            <label id="icon" for="name"><i class="icon-envelope "></i></label>
            <input type="email" name="email" id="name" placeholder="Email" required/>

            <label id="icon" for="name"><i class="icon-shield"></i></label>
            <input type="password" name="password" id="name" placeholder="Password" required/>

            <label id="icon" for="name"><i class="icon-shield"></i></label>
            <input type="password" name="password_confirmation" id="name" placeholder="Repassword" required/>

            <br><br>
            <input type="submit" value="Signup" class="btn btn-success">
            <a href="{{url('/login')}}" class="btn btn-danger">Login</a>
            </form>
            </div>
        </div>
@stop        