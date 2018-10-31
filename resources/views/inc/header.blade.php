<div class="WC_bar ">
    <div> <i class="far fa-user-circle" ></i> Welcome, {{Auth::user()->last_name }} </div>
    <button  ><a  style="color: white;" href="/logout" >Logout</a></button>
    @if (Auth::user()->role == 'admin')
        <button  ><a  style="color: white;" href="/users" >Users</a></button>
    @endif

    <i class="fas fa-globe-asia"></i>
</div>

<div class="header">
    <div class="line1" >
<a  href="{{url("home")}}" ><img src="images/logo.png" ></a>
<div class="headerLeft">
    <i class="fas fa-user"></i>
    <i class="fas fa-globe-asia"></i>
    <i class="fas fa-align-justify" onclick="showNav()"></i>
</div>
<div id="nav" >
    <a href="{{url("news")}}"><div class="link">News and Updates</div></a>
    <a><div class="link">Cor Resources</div></a>
    <a><div class="link">Understanding LOJUXTA</div></a>
    <a href="{{url("library")}}"><div class="link">HoFH Library</div></a>
    <a><div class="link">Objection Handlers</div></a>
</div>
    </div>