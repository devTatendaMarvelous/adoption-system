
<x-dashboard>

     
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Add Donation</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">Add Donation</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5 class="card-title">Add Donation Details</h5>

</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="needs-validation" novalidate action="{{ route('donations.store') }}"  method="POST" enctype="multipart/form-data">
     @csrf
     <input type="hidden" name="id" value="{{ $id }}" >
<div class="form-row">
<div class="col-md-6 mb-3">
     <div class="row">
          <div class="col-12">
          <label for="validationCustom01">Amount</label>
          <input class="form-control"  type="number" name="amount" id="validationCustom01" placeholder="Amount"  required>
          <div class="valid-feedback">
          Looks good!
          </div>
          <div class="invalid-feedback">
          Please enter Donation Amount.
          </div>
          </div>
          </div>
          <div class="col-12 mb-3">
<label for="validationCustom04">Donation Type</label>

<select name="type" class="form-control" id="validationCustom04">
     <option value="Individual">Individual</option>
</select>
<div class="invalid-feedback">

</div>
</div>

<div class="col-12 mb-3">
<label for="validationCustom04">Currency</label>

<select name="currency" class="form-control" id="validationCustom04">
     <option value="USD" onclick="show()">USD</option>
     <option value="ZWL" onclick="hide()">ZWL</option>
</select>
<div class="invalid-feedback">

</div>
</div>


     </div>
     <div class="col-md-6">
          <x-creditCard/>
     </div>
</div>


<div class="col-md-2 text-center">

     <button class="btn btn-primary col-12" type="submit"> Donate</button>
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