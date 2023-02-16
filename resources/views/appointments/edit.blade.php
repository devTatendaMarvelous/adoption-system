
<x-dashboard>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Update An Appointment</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">Update An Appointment</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5 class="card-title">Update Appointment Details</h5>

</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="needs-validation" novalidate action="{{ route('appointments.update',[$appointment->id] )}}"  method="POST" enctype="multipart/form-data">
     @csrf
     
<div class="form-row">
<div class="col-md-6 mb-3">
<label for="validationCustom01">Appointment Date</label>
<input class="form-control"  type="date" name="date" id="validationCustom01" value="{{ $appointment->date }}"  required>
<div class="valid-feedback">
Looks good!
</div>
<div class="invalid-feedback">
Please enter Date.
</div>
</div>

<div class="col-md-2 mb-3">
<label for="validationCustom04">Appointment Session</label>

<select name="session" class="form-control" id="validationCustom04">
     <option value="{{ $appointment->session }}">{{ $appointment->session }}</option>
     <option value="Morning">Morning</option>
     <option value="Afternoon">Afternoon</option>
</select>
<div class="invalid-feedback">

</div>
</div>


</div>
</div>
</div>

<div class="col-md-2 text-center">

     <button class="btn btn-primary" type="submit"> Update</button>
</div>
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