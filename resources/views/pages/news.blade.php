@extends('layout.app')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages.css')}}" />

@include('inc.header')
<div class="PageInfoBar" >
    <div class="GrayBar"></div>
    <img class="GrayIcon" src="images/grayicon.png">
    <div class="OneWord" >LOJUXTA</div>
    <div class="BlueBar">
        <div class="blue_title">
            LEARNING RESOURCE
        </div>
        <div class="SecondLogo">
            <div>News and Updates</div>
            <img src="images/newslogo.png" >
        </div>
    </div>
</div>
@section('content')
    <div class="container">
        <p class="txt1"> News & updates / <a style="color: dodgerblue">all</a></p>
    </div>
    <div class="container-fluid  ">
        <div class="container">
            <small class="smaldate"> 1 oktober</small>
            <div class="contentheader">
                <img src="images/info.png" class="infoimg">
                <h1>Lorem ipsum dolor sit amet,</h1>
            </div>
            <div class="content">
                <div class="content_imgs mt-3" >
                    <svg width="100" height="400" class="bluerect">
                        <rect width="100" height="358"  style="fill: rgb(0, 84, 147);" />
                    </svg>
                    <img src="images/content1.png" class="content_img" >
                </div>
                <div class="content_txt">
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                    </p>
                    <ul>
                        <li><span class="dot"></span>ipsum dolor sit a</li>
                        <li><span class="dot"></span>ipsum dolor sit a</li>
                    </ul>
                    <button class="btn btn-primary float-left btns btnD">Download</button>
                    <button class=" btn btn-light float-left btns btnI"> > </button>
                    <button class="btn btn-light float-right btns1">&and;</button>
                </div>
            </div>
            <hr  class="content_hr">
        </div>
    </div>
    <div class="container pt-5">
        <p class="text-primary" >Lorem ipsum dolor</p>
        <div class="row rowresponsive">
            <div class="col blue text-center">

                <div class="col respon1">
                    <img src="images/newslogo.png" class="mt-4">
                </div>
                <div class="col respon2">
                    <p class="text-white size mt-4">News and <br>Update</p>
                </div>
                <div class="col respon3">
                    <button href="#" class="btn text-white bg-transparent " style="font-size: 1.3em; "> > </button>
                </div>
            </div>
            <div class="col purple text-center ">
                <div class="col respon1">
                    <img src="images/purple.png" class="mt-4">
                </div>
                <div class="col respon2">
                    <p class="text-white size mt-4">Core<br> Rescurces</p>
                </div>
                <div class="col respon3">
                    <button href="#" class="btn text-white bg-transparent " style="font-size: 1.3em; "> > </button>
                </div>
            </div>
            <div class="col orange text-center ">
                <div class="col respon1">
                    <img src="images/orange.png" class="mt-4">
                </div>
                <div class="col respon2 responorange">
                    <p class="text-white size mt-4 "> Understanding<br> Lojuxta</p>
                </div>
                <div class="col respon3">
                    <button href="#" class="btn text-white bg-transparent " style="font-size: 1.3em;"> > </button>
                </div>
            </div>
            <div class="col brown text-center ">
                <div class="col respon1">
                    <img src="images/brown.png" class="mt-4">
                </div>
                <div class="col respon2">
                    <p class="text-white size mt-4" > HoFH Libary</p>
                </div>
                <div class="col respon3">
                    <button href="#" class="btn text-white bg-transparent " style="font-size: 1.3em; "> > </button>
                </div>
            </div>
            <div class="col green text-center ">
                <div class="col respon1 respongreenimg">
                    <img src="images/green.png" class="mt-4">
                </div>
                <div class="col respon2 respongreen">
                    <p class="text-white size mt-4 "> Objection<br> Handlers</p>
                </div>
                <div class="col respon3">
                    <button href="#" class="btn text-white bg-transparent " style="font-size: 1.3em;"> > </button>
                </div>
            </div>
        </div>
    </div>
@endsection