<x-dashboard>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
     <h3 class="page-title">adoptions</h3>
     <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
          <li class="breadcrumb-item active">adoptions</li>
     </ul>
</div>
</div>
</div>
     <div class="row">
     <div   class="col-sm-12">
     <div class="card card-table">
     <div class="card-header">
     <div class="row">

          <h4 class="card-title col-md-6">List of Adoption Requests</h4>
          <div class="col-md-6">
               
          </div>
     </div>
     </div>
     <div class="card-body p-4">
     <div class="table-responsive">
     <table class="table table-hover table-center mb-0" id="example">
     <thead>
     <tr>
     <th>Orphan </th>
     <th>Adopted By</th>
     <th>Referrence Number</th>
     <th>Status</th>
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
               <td>{{ $adoption->ref }}</td>
               <td>{{ $adoption->status }}</td> 
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
                         @if ($adoption->status=='Approved' )
                         <a href="appointments/{{ $adoption->id}}/create" class="btn btn-sm bg-info">
                         <i class="fe fe-tras"></i> Book Appointment
                         </a>
                         @endif 
                         <a href="adoptions/{{ $adoption->id}}/delete" class="btn btn-sm bg-danger-light">
                         <i class="fe fe-trash"></i> Delete
                         </a>
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

</x-dashboard>