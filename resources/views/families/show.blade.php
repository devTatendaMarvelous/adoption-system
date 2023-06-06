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
{{-- <div class="profile-header">
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
</div> --}}

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
     <div class="col-md-4">
          
          <div class="row">
          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
          <p class="col-sm-9">{{ $family->rep_name }}</p>
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
          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">ID Number</p>
          <p class="col-sm-9">{{ $family->id_num }}</p>
          </div>
          <div class="row">
          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
          <p class="col-sm-9">{{ $family->email }}</p>
          </div>
     </div>
     <div class="col-md-4">
          
          <div class="row">
          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Language</p>
          <p class="col-sm-9">{{ $family->language }}</p>
          </div>
          <div class="row">
          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Occupation</p>
          <p class="col-sm-9">{{ $family->occupation }}</p>
          </div>
          <div class="row">
          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Marrital Status</p>
          <p class="col-sm-9">{{ $family->relationship_status }}</p>
          </div>
          <div class="row">
          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Race</p>
          <p class="col-sm-9">{{ $family->race }}</p>
          </div>
          
     </div>
     <div class="col-md-3">
          
          <div class="row">
          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Taken Foster Training?</p>
          <p class="col-sm-9">{{ $family->foster_training===1? 'Yes':'No' }}</p>
        
          </div>
          @if($family->foster_training===1)
               <div class="row">
               <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Date Completed</p>
               <p class="col-sm-9">{{ $family->date_completed}}</p>
               </div>
          @endif
          
          <div class="row">
          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Been a Foster Parent?</p>
          <p class="col-sm-9">{{ $family->foster_parent===1? 'Yes':'No' }}</p>
          </div>
          <div class="row">
          
          <p class="col-sm-9"><a class="btn btn-primary" href="{{ asset('storage/'.$family->ref_letter)}}">View Reference Letter</a></p>
          </div>
     </div>
     <p class="col-sm-9"><a class="btn btn-primary" href="{{ asset('storage/'.$family->nationalId)}}">View National Id</a></p>
</div>


</div>
</div>

</div>
</div>
</div>
</div>
</div>
</x-dashboard>