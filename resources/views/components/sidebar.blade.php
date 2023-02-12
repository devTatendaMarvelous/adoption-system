 
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main</span>
</li>
<li class="">
<a href="{{ route('home') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
</li>
<li class="" href="users.html">
<a href=""><i class="fe fe-"></i> <span></span></a>
</li>
 <li class="submenu">
<a href="#"><i class="fe fe-users"></i> <span> Orphans</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class="" href="{{ route('orphans') }}">All Orphans</a></li>
<li><a class="" href="{{ route('orphans.create') }}">Add Orphan</a></li>

</ul>
</li>
 <li class="submenu">
<a href="#"><i class="fe fe-users"></i> <span> Families</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class="" href="{{ route('families') }}">All Families</a></li>
<li><a class="" href="{{ route('families.create') }}">Add Family</a></li>

</ul>
</li>



<li class="submenu">
<a href="#"><i class="fe fe-document"></i> <span> Donations </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class="" href="{{ route('donations') }}"> All Donations </a></li>
<li><a class="" href="{{ route('donations.donate') }}"> Donate </a></li>
{{-- <li><a class="" href="forgot-password.html"> Forgot Password </a></li>
<li><a class="" href="lock-screen.html"> Lock Screen </a></li> --}}
</ul>
</li>

<li class="submenu">
<a href="#"><i class="fe fe-user-plus"></i> <span> Adoptions </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class="" href="{{ route('adoptions') }}"> All Adoptions </a></li>
<li><a class="" href="{{ route('adoptions.adopt') }}"> Adopt </a></li>
<li><a class="" href="forgot-password.html">Adoption Appointments </a></li>
<li><a class="" href="lock-screen.html"> Lock Screen </a></li>
</ul>
</li>

{{-- 
<li class="submenu">
<a href="#"><i class="fe fe-warning"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="error-404.html">404 Error </a></li>
<li><a href="error-500.html">500 Error </a></li>
</ul>
</li>
<li class="" href="users.html">
<a href="{{ route('orphans') }}"><i class="fe fe-users"></i> <span>Users</span></a>
</li>
<li class="" href="blank-page.html">
<a href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
</li>
<li class="" href="maps-vector.html">
<a href="maps-vector.html"><i class="fe fe-map"></i> <span>Vector Maps</span></a>
</li>
<li class="menu-title">
<span>UI Interface</span>
</li>
<li class="" href="components.html">
<a href="components.html"><i class="fe fe-vector"></i> <span>Components</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-layout"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class="" href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a class="" href="form-input-groups.html">Input Groups </a></li>
<li><a class="" href="form-horizontal.html">Horizontal Form </a></li>
<li><a class="" href="form-vertical.html"> Vertical Form </a></li>
<li><a class="" href="form-mask.html"> Form Mask </a></li>
<li><a class="" href="form-validation.html"> Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class="" href="tables-basic.html">Basic Tables </a></li>
<li><a class="" href="data-tables.html">Data Table </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"> <span>Level 1</span></a>
</li>
</ul>
</li> --}}
</ul>
</div>
</div>
</div>