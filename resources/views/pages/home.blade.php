@extends('layout.app')
<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}" />

@section('content')
    @include('inc.header')
    <div class="PageInfoBar indexPageInfo"  >
        <img class="GrayIcon" src="images/grayicon.png">
        <div class="OneWord" >LOJUXTA</div>
        <div class="BlueBar w-100">
            <div class="blue_title">
                LEARNING RESOURCE
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="slideshow">
        <img src="images/indeximage.png" class="indeximage">
        <div class="slideshow-container">

            <div class="mySlides " >
                <div class="numbertext">1 / 3</div>
                <img src="images/info.png" style="width:100%; height: 100px">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides ">
                <div class="numbertext">2 / 3</div>
                <img src="images/logo.png" style="width:100%; height: 100px">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides ">
                <div class="numbertext">3 / 3</div>
                <img src="images/info.png" style="width:100%; height: 100px">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center" class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <div class="row rowresponsive">
        <div class="col blue text-center">

            <div class="col respon1">
                <img src="{{asset('images/newslogo.png')}}" class="mt-4">
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
    <div class="welcomeTxt">
        <h2 class="welctxtBig">Welcome to our learning rescource</h2>
        <div class="nxt nxt 1mt-3">
            <img src="images/indexcamera.png" class="img"><h5 class="welctxt">NEW VIDEOS</h5>
        </div>
        <div class="nxt">
            <img src="images/indexcamera.png" class="img"><h5 class="welctxt">CONSULT ARTICLES</h5>
        </div>
        <div class="nxt nxt3">
            <img src="images/indexcamera.png" class="img"><h5 class="welctxt">DOWNLOAD POSTER SUMMARIES<small>... and so much more</small></h5>
        </div>
        <p class="p-2">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vit</p>

    </div>
    <div class="imgBackground">
        <!-- <img src="https://via.placeholder.com/290x200" class="imgBackground">-->

        <div class="imgDiv">

            <div class="div1">
                <img src="images/indexcamera.png" class="img p-1"> <h6 class="ml-4">TEST YOUR KNOWLEDGE</h6>
            </div>
            <div class="div2">
                <h4 class="text-white">TAKE THE MULTIPLE CHOICE QUIZ TO TEST YOUR JNOWLEDGE</h4>
                <button class="btn btn-primary btnDownload">Start</button><button class="btn btn-light btnNext"> > </button>
            </div>
        </div>

    </div>
</div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

@endsection