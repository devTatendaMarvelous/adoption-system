
<div class="header">

<div class="header-left">
<a href="{{ route('home') }}" class="logo">
     <div class="row p-2 " style="margin-top:-25px; ">
          <a class="col-2" href="/"><img src="website/images/resources/logo-1.png" alt=""></a> 
          
     </div>
</a>

</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fe fe-text-align-left"></i>
</a>


<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-bars"></i>
</a>


<ul class="nav user-menu">
<div class="row text-center text-white">

     <h5 class=" col-12">{{ Auth::user()->name }}</h5>
     <p class=" col-12 ">{{ Auth::user()->role }}</p>
</div>

<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="{{Auth::user()->photo?  asset('storage/'.Auth::user()->photo):'/noimage.png'  }}" width="31" alt="Ryan Taylor"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="{{Auth::user()->photo?  asset('storage/'.Auth::user()->photo):'/noimage.png' }}" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>{{ Auth::user()->name }}</h6>
<p class="text-muted mb-0">{{ Auth::user()->role }}</p>
</div>
<div class="user-text">
<h6><a href="{{ route('user.edit') }}">Profile</a></h6>
</div>
</div>
<form action="{{ route('logout') }}" method="POST">
     @csrf
     <input type="submit" class="dropdown-item" value="Logout"/>
</form>

</div>
</li>

</ul>

</div>