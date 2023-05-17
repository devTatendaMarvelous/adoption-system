
<x-dashboard>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">messages</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">messages</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">

<div class="card-header">
<h4 class="card-title">List of messages</h4>
</div>

<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Sent By</th>
<th>Email</th>
<th>Message</th>

<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
     @forelse ($messages as $message )
          <tr>
          
          <td>{{ $message->name }}</td>
          <td>{{ $message->email }}</td>
          <td>{{ $message->message }}</td>
          
       
        @if (Auth::user()->id===$message->user_id|| Auth::user()->role==='Admin')
        
               <td class="text-center">
                    <div class="actions">
                         {{-- <a href="{{ route('messages.edit',[$message->id]) }}" class="btn btn-sm bg-success-light mr-2">
                         <i class="fe fe-pencil"></i> Edit
                         </a> --}}
                         <a href="{{ route('messages.delete',[$message->id]) }}" class="btn btn-sm bg-danger-light">
                         <i class="fe fe-trash"></i> Delete
                         </a>
                    </div>
               </td>
        @endif
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