@extends('layout.loginlayout')
@section('content')
    <div class="loginContainer">
        <div class="header">
            <img src="images/logo.png" >
            <div id="nav" >
                <a href="/users" class="link">Back</a>
            </div>
        </div>
        <div class="PageInfoBar">
            <img class="GrayIcon" src="images/grayicon.png">
            <p class="OneWord">LOJUXTA</p>
            <div class="BlueBar" style="background: #49b9e5; width: 100%">
                <div class="blue_title"><p>LEARNING RESOURCE</p></div>
            </div>

        </div>

        <form  class="loginForm" method="POST" action="/users/{{$user->id}}">
            {!! csrf_field() !!}
            {{method_field('PATCH')}}

            <p class="loginTitle">Edit</p>
            <label>
                <input class="form-control" type="text" name="first_name"   value="{{ $user->first_name }}" >
            </label>
            <label>
                <input class="form-control" type="text" name="last_name"  value="{{ $user->last_name }}" >
            </label>
            <label>
                <select class="form-control" name="role"  >
                    <option > {{ $user->role }}</option>
                    <option value="admin">Administrator</option>
                    <option value="user" >Gebruiker</option>
                </select>
            </label>
            <label>
                <input class="form-control" type="text" name="email"  required   value="{{ $user->email }}">
            </label>

            <div class="loginSubmit">
                <input class="btn  float-left btns btnD SubmitBtn" name="submit" type="submit" value="Update" ><div  class=" btn btn-light float-left btns btnI"> > </div>
            </div>
            <form method="POST" action="/users/{{$user->id}} " onsubmit= " return false">
                {{method_field('delete')}}
                {!! csrf_field() !!}
                <button style="background: red" class=" btn  float-right btns btnD SubmitBtn  " type="submit">Delete</button>
            </form>
        </form>
    </div>

@endsection