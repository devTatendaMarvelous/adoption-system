
<x-dashboard>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Transfer Orphan</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">Transfer Orphan</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5 class="card-title">Transfer Orphan Details</h5>

</div>
<div class="card-body">
<div class="row">
<div class="col-sm">
<form class="needs-validation" novalidate action="{{ route('orphans.transfer.save',[$id]) }}"  method="POST" enctype="multipart/form-data">
     @csrf
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">Orphanage Name</label>
    <select class="form-control" name="orphanage_id">
        @forelse($orphanages as $orph)
            <option value="{{ $orph->id}}">{{$orph->name}}</option>
        @empty

        @endforelse
    </select>
<div class="valid-feedback">
Looks good!
</div>
<div class="invalid-feedback">
Please enter Orphanage.
</div>
</div>
<div class="col-md-6 mb-3">
<label for="validationCustomUsername">Transfer Notes</label>
     <textarea name="notes" class="form-control" id="validationCustomUsername" cols="30" rows="10" placeholder="Transfer Notes"></textarea>
<div class="invalid-feedback">
Please choose a username.
</div>
</div>
</div>
<button class="btn btn-primary col-12" type="submit">Transfer Orphan</button>
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
