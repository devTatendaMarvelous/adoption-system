
<x-dashboard>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Edit Your Account</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">Edit Your Account</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5 class="card-title">Edit Your Profile</h5>

</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="needs-validation" novalidate action="{{ route('user.update',[$user->id]) }}"  method="POST" enctype="multipart/form-data">
     @csrf
    
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">Name</label>
<input type="text" class="form-control" name="name" value="{{ $user->name }}" id="validationCustom01" placeholder="Full name"  required>
<div class="valid-feedback">
Looks good!
</div>
<div class="invalid-feedback">
Please enter  name.
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationCustom01">Email</label>
<input type="email" class="form-control" name="email" id="validationCustom01" value="{{ $user->email}}"  required>
<div class="valid-feedback">
Looks good!
</div>
<div class="invalid-feedback">
Please enter Your Account Birth Number.
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationCustom02">Password</label>
 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>

<div class="form-row">
<div class="col-md-6 mb-3 text-center">
<label for="validationCustom03">photo</label>
<input type="file" name="photo" class="form-control" id="validationCustom03" placeholder="City" >
<img src="{{ asset('storage/'.$user->photo) }}" alt="no photo" width="100">
<div class="invalid-feedback">
Please provide a photo.
</div>
</div>

</div>
</div>

<button class="btn btn-primary" type="submit">Update Your Account</button>
</form>
</div>
</div>
</div>
</div>




</div>
</div>

</div>
</div>

</x-dashboard>