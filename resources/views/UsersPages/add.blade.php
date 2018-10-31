@extends('layout.loginlayout')
@section('content')

    <div class="loginContainer">
        <div class="header">
            <img src="images/logo.png" >
            <div id="nav" >
                <a href="/users" class="link">back</a>
            </div>
        </div>
        <div class="PageInfoBar">
            <img class="GrayIcon" src="images/grayicon.png">
            <p class="OneWord">LOJUXTA</p>
            <div class="BlueBar" style="background: #49b9e5; width: 100%">
                <div class="blue_title"><p>LEARNING RESOURCE</p></div>
            </div>

            </div>
        <form  class="loginForm" method="POST" action="/users">
            {!! csrf_field() !!}
            <p class="loginTitle">New User</p>
            <label>
                <input class="form-control" type="text" name="first_name" required placeholder="first name" >
            </label>
            <label>
                <input class="form-control" type="text" name="last_name" required placeholder="last name" >
            </label>
            <label>
                <select class="form-control" name="role">
                    <option value="">Selecteer een rol</option>
                    <option value="admin">Administrator</option>
                    <option value="user" >Gebruiker</option>
                </select>
            </label>
            <label>
                <input class="form-control" type="text" name="email" required placeholder="E-mail" >
            </label>
            <div class="">
                <input class="btn  float-left btns btnD SubmitBtn" name="submit" type="submit" value="Add" ><div  class=" btn btn-light float-left btns btnI"> > </div>
            </div>

        </form>
    </div>
@endsection