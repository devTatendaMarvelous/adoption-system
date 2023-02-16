<x-dashboard>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Welcome {{ Auth::user()->name }}!</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Dashboard</li>
</ul>
</div>
</div>
</div>

<div class="row">

     

<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-primary">
<i class="fe fe-users"></i>
</span>

<h3>168</h3>
</div>
<div class="dash-widget-info">

     <form action="{{ route('orphans.search') }}" method="post">
          @csrf
          <input type="hidden" name="search" value="Available">
          <button class="btn btn-primary">Available Orphans</button>
     </form>

</div>
</div>
</div>
</div>




<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-success">
<i class="fe fe-users"></i>
</span>
<h3>21587</h3>

</div>
<div class="dash-widget-info">
<h6 class="text-muted"></h6>
     <form action="{{ route('orphans.search') }}" method="post">
          @csrf
          <input type="hidden" name="search" value="Adopted">
          <button class="btn btn-success">Adopted Orphans</button>
     </form>

</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card ">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-danger">
<i class="fe fe-users"></i>
</span>
<h3>56485</h3>

</div>
<div class="dash-widget-info">
     <form action="{{ route('orphans.search') }}" method="post">
          @csrf
          <input type="hidden" name="search" value="Deceased">
          <button class="btn btn-danger">Deceased Orphans</button>
     </form>

</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-warning">
<i class="fe fe-users"></i>
</span>
<h3>62523</h3>

</div>
<div class="dash-widget-info">
     <form action="{{ route('orphans.search') }}" method="post">
          @csrf
          <input type="hidden" name="search" value="Deceased">
          <button class="btn btn-warning">Matured Orphans</button>
     </form>

</div>
</div>
</div>
</div>



</div>

     <div class="card">
          <div class="card-hearder p-4 text-center">
              <h3> Pending Requests</h3>
          </div>
     <div class="card-body">
          <div class="row">
          <div class="col-md-6">
               <div class="card">
                    <div class="card-header">
                         <h4>Pending Adoption Requests</h4>
                    </div>
                    <div class="card-body">
                    </div>
               </div>
          </div>
     </div>
     </div>
</div>

</div>

</div>
</x-dashboard>