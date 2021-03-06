@extends('layout')

@section('content')


<h2> Show All Users </h2>


<div class="container">

    
    <div class="table-responsive"> 
        <table class="main-table text-center table table-bordered" border="1" bordercolor="#F0F0F0">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop