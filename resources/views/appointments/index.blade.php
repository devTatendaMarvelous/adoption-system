<x-dashboard>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
     <h3 class="page-title">appointments</h3>
     <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
          <li class="breadcrumb-item active">appointments</li>
     </ul>
</div>
</div>
</div>
     <div class="row">
     <div   class="col-sm-12">
     <div class="card card-table">
     <div class="card-header">
     <h4 class="card-title">List of appointments</h4>
     </div>
     <div class="card-body">
     <div class="table-responsive">
     <table class="table table-hover table-center mb-0" id="example">
     <thead>
     <tr>

     <th>Booked By </th>
     <th>Orphan </th>
     <th>Appointment Date</th>
     <th>Session</th>
     <th>Status</th>
     <th class="text-center">Action</th>
     </tr>
     </thead>
     <tbody>
          @forelse ($appointments as $appointment )
               <tr>
               <td>
                    {{$appointment->rep_name}}
               </td>
               <td>
                    {{$appointment->orphan_name}}
               </td>
               <td>{{ $carbon::parse($appointment->date )->format('d M Y') }} </td>
               <td>{{ $appointment->session }}</td>
               <td>{{ $appointment->status }}</td> 
               <td class="text-center">
                    <div class="actions">
                         @if ($appointment->status=='Pending')
                              
                         <a href="{{ route('appointments.approve',[$appointment->id]) }}" class="btn btn-sm bg-info-light mr-2">
                         <i class="fe fe-check"></i> Approve
                         </a>

                         <button type="button" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#exampleModal{{ $appointment->id }}">
                              Reject
                              </button>
                              <x-reject :appointment="$appointment"/>
                         
                         @endif
                          <a href="{{ route('appointments.edit',[$appointment->id]) }}" class="btn btn-sm bg-success-light mr-2">
                         <i class="fe fe-pencil"></i> Edit
                         </a>
                         <a href="{{route('appointments.delete',[$appointment->id])}}" class="btn btn-sm bg-danger-light">
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