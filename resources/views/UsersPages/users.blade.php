


@extends('layout.loginlayout')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages.css')}}" />

@section('content')

    <div class="loginContainer">
        <div class="header">
            <img src="images/logo.png" >
            <div id="nav" >
                <a href="/home" class="link">Home</a>
            </div>
        <div class="PageInfoBar">
            <img class="GrayIcon" src="images/grayicon.png">
            <p class="OneWord">LOJUXTA</p>
            <div class="BlueBar" style="background: #49b9e5; width: 100%">
                <div class="blue_title"><p>LEARNING RESOURCE</p></div>
            </div>

        </div>
       <h1 class="text-center" >Users</h1>

    <div class="UsersContainer">
        <div>
            <div class="ml-3">
                <a class=" btn  float-left btns btnD SubmitBtn  "  href="/users/create">New user
                </a>
            </div>

        </div><br><br>

        @foreach($users as $user)
            <div class="col-sm-4 float-left mt-1 mb-1 ">
                <a class=" btn btn-primary w-100  float-left btns btnD" href="/users/{{$user->id}}/edit">
                    {{$user-> first_name. " ".$user-> last_name}}
                </a>
            </div>
        @endforeach
    </div>


    </div>
    <img src="images/body.png" class="bg-image">
@endsection