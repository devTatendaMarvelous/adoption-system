
<x-dashboard>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Add post</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">Add post</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5 class="card-title">Add post Details</h5>

</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="needs-validation" novalidate action="{{ route('posts.store') }}"  method="POST" enctype="multipart/form-data">
     @csrf
<div class="form-row">
     <div class="col-md-6 mb-3">
     <label for="validationCustom01">Title</label>
     <input type="text" class="form-control" name="title" id="validationCustom01" placeholder="Post Title"  required>
     <div class="valid-feedback">
     Looks good!
     </div>
     <div class="invalid-feedback">
     Please enter post full name.
     </div>
</div>
</div>
<div class="form-row">
<div class="col-md-6 mb-3">
<label for="validationCustom03">Post File</label>
<input type="file" name="file" class="form-control" id="validat ionCustom03" placeholder="City" >
<div class="invalid-feedback">
Please provide a photo.
</div>
</div>
<div class="col-12 mb-3">
<label for="validationCustomUsername">Post Body</label>
     <textarea name="body" class="form-control" id="validationCustomUsername" cols="30" rows="10" placeholder="Post Body"></textarea>
<div class="invalid-feedback">
Please choose a username.
</div>
</div>



<button class="btn btn-primary" type="submit">Add post</button>
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