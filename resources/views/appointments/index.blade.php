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
     <h4 class="card-title">List of adoptions</h4>
     </div>
     <div class="card-body">
     <div class="table-responsive">
     <table class="table table-hover table-center mb-0">
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
                         
                         <a href="apointments/{{ $adoption->id}}/create" class="btn btn-sm bg-info">
                         <i class="fe fe-tras"></i> Book Appointment
                         </a>
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