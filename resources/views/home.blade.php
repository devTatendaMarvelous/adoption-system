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

<h3>{{ $available }}</h3>
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
<h3>{{ $adopted }}</h3>

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
<h3>{{ $deceased }}</h3>

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
<h3>{{ $matured }}</h3>

</div>
<div class="dash-widget-info">
     <form action="{{ route('orphans.search') }}" method="post">
          @csrf
          <input type="hidden" name="search" value="Matured">
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
                         <table class="table table-hover table-center mb-0" >
                              <thead>
                              <tr>
                              <th>Orphan </th>
                              <th>Adopted By</th>
                              <th class="text-center">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                                   @forelse ($adoptions as $adoption )
                                        <tr>
                                        <td>
                                             {{$adoption->orphan_name}}
                                        </td>
                                        <td> {{$adoption->rep_name}}</td>
                                        <td class="text-center">
                                             <div class="actions">
                                                  @if ($adoption->status=='Pending'  )
                                                       
                                                       <a href="{{ route('adoptions.approve',[$adoption->id]) }}" class="btn btn-sm bg-info-light mr-2">
                                                       <i class="fe fe-check"></i> Approve
                                                       </a>
                                                       <a href="{{route('adoptions.reject',[ $adoption->id])}}" class="btn btn-sm bg-danger-light">
                                                       <i class="fe fe-">x</i> Reject
                                                       </a>
                                                  @endif
                                                  
                                             </div>
                                        </td>
                                   </tr>
                                   
                                   @empty
                                        
                                   @endforelse
                              </tbody>
     </table>
                    </div>
               </div>
          </div>

          <div class="col-md-6">
               <div class="card">
                    <div class="card-header">
                         <h4>Pending Appointment Requests</h4>
                    </div>
                    <div class="card-body">
                         <table class="table table-hover table-center mb-0">
                              <thead>
                              <tr>

                              <th>Booked By </th>
                              <th>Appointment Date</th>
                              <th>Session</th>
                              <th class="text-center">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                                   @forelse ($appointments as $appointment )
                                        <tr>
                                        <td>
                                             {{$appointment->rep_name}}
                                        </td>
                                        
                                        <td>{{ $carbon::parse($appointment->date )->format('d M Y') }} </td>
                                        <td>{{ $appointment->session }}</td>
                                        <td class="text-center">
                                             <div class="actions">
                                                  @if ($appointment->status=='Pending')
                                                       
                                                  <a href="{{ route('appointments.approve',[$appointment->id]) }}" class="btn btn-sm bg-info-light mr-2">
                                                  <i class="fe fe-check"></i> Approve
                                                  </a>
                                                  <a href="{{route('appointments.reject',[ $appointment->id])}}" class="btn btn-sm bg-danger-light">
                                                  <i class="fe fe-">x</i> Reject
                                                  </a>
                                                  @endif
                                                  
                                             </div>
                                        </td>
                                   </tr>
                                   
                                   @empty
                                        
                                   @endforelse
                              </tbody>
                              </table>
                    </div>
               </div>
          </div>
     </div>
     </div>
</div>

</div>

</div>
</x-dashboard>