
<x-dashboard>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Edit Orphan</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">Edit Orphan</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5 class="card-title">Edit Orphan Details</h5>

</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="needs-validation" novalidate action="{{ route('orphans.update',[$orphan->id]) }}"  method="POST" enctype="multipart/form-data">
     @csrf
    
<div class="form-row">
<div class="col-md-6 mb-3">
<label for="validationCustom01">Full Name</label>
<input type="text" class="form-control" name="orphan_name" value="{{ $orphan->orphan_name }}" id="validationCustom01" placeholder="Full name"  required>
<div class="valid-feedback">
Looks good!
</div>
<div class="invalid-feedback">
Please enter Orphan full name.
</div>
</div>
<div class="col-md-6 mb-3">
<label for="validationCustom02">Date Of Birth</label>
<input type="date" class="form-control" name="dob" id="validationCustom02" placeholder="Last name" value="{{ $orphan->dob }}" required>
<div class="valid-feedback">
Looks good!
</div>
<div class="invalid-feedback">
Please enter Orphan date of birth.
</div>
</div>
<div class="col-md-6 mb-3">
<label for="validationCustomUsername">Description</label>
     <textarea name="description" class="form-control" id="validationCustomUsername" cols="30" rows="10" placeholder="Description">{{ $orphan->description }}
     </textarea>
<div class="invalid-feedback">
Please choose a username.
</div>
</div>
<div class="form-row">
<div class="col-md-6 mb-3 text-center">
<label for="validationCustom03">photo</label>
<input type="file" name="photo" class="form-control" id="validationCustom03" placeholder="City" >
<img src="{{ asset('storage/'.$orphan->photo) }}" alt="no photo" width="100">
<div class="invalid-feedback">
Please provide a photo.
</div>
</div>

<div class="col-md-3 mb-3">
<label for="validationCustom04">Gender</label>

<select name="gender" class="form-control" id="validationCustom04">
     <option value="Male">Male</option>
     <option value="Female">Female</option>
</select>

</div>
<div class="col-md-3 mb-3">
<label for="validationCustom04">Status</label>

<select name="status" class="form-control" id="validationCustom04">
     <option value="{{ $orphan->status }}">{{ $orphan->status }}</option>
     <option value="Available">Available</option>
     <option value="Adopted">Adopted</option>
     <option value="Returned">Returned</option>
     <option value="Matured">Matured</option>
</select>

</div>
</div>
</div>

<button class="btn btn-primary" type="submit">Update Orphan</button>
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