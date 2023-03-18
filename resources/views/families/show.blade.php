<x-dashboard>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Profile</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">family</a></li>
<li class="breadcrumb-item active">Profile</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="profile-header">
<div class="row align-items-center">
<div class="col-auto profile-image">
<a href="#">
<img class="rounded-circle" alt="User Image" src="'assets/img/profiles/avatar-03.jpg' ">
</a>
</div>
<div class="col ml-md-n2 profile-user-info">
     
<h4 class="user-name mb-0">{{ $family->rep_name }}</h4>


<div class="about-text">{{ $family->description }}</div> 
</div>

</div>
</div>

<div class="tab-content profile-tab-cont">

<div class="tab-pane fade show active" id="per_details_tab">

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h5 class="card-title d-flex justify-content-between">
<span>Personal Details</span>
{{-- <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a> --}}
</h5>
<div class="row">
<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
<p class="col-sm-9">{{ $family->family_name }}</p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
<p class="col-sm-9">{{ $family->dob }}</p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Gender</p>
<p class="col-sm-9">{{ $family->gender }}</p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Birth Certificate Number</p>
<p class="col-sm-9">{{ $family->id }}</p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Status</p>
<p class="col-sm-9">{{ $family->status }}</p>
</div>


</div>
</div>

</div>
</div>
</div>
</div>
</div>
</x-dashboard>