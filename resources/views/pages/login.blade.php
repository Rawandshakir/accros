@extends('layout.loginlayout')
@section('content')

    <div class="loginContainer">
       <div class="header"> <img src="images/logo.png" > </div>
        <div class="PageInfoBar">
            <img class="GrayIcon" src="images/grayicon.png">
            <p class="OneWord">LOJUXTA</p>
            <div class="BlueBar" style="background: #49b9e5; width: 100%">
                <div class="blue_title"><p>LEARNING RESOURCE</p></div>
            </div>

        </div>
        <p class="LoginPara">parturient montes, nascetur ridiculus mus.. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam</p>
        <form  class="loginForm" method="POST" action="/login">
            {!! csrf_field() !!}
            <p class="loginTitle">LOGIN</p>
            <label>
                <input class="form-control" type="text" name="email" required placeholder="E-mail" >
            </label>
            <label>
                <input class="form-control" type="password" name="password" required placeholder="Password" >
            </label>
            <div class="">
                <input class="btn  float-left btns btnD SubmitBtn" name="submit" type="submit" value="Log in" ><div  class=" btn btn-light float-left btns btnI"> > </div>
                <a href="/forgetpass" >Forgotten Password? </a>
            </div>

        </form>



    </div>
    <img src="images/body.png" class="bg-image">
@endsection
