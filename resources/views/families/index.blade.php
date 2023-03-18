
<x-dashboard>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">families</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">families</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">

<div class="card-header">
          <div class="row">
               <h4 class="card-title col-md-6">List of families</h4>
               <div class="col-md-6">
                    <form action="/families/search" method="post" class="row">
                         @csrf
                         <input type="text" name="search" placeholder="Search Families" class="form-confrol col-6">
                         <div class="col-1"></div>
                         <button class="col-3 btn btn-info">Search</button>
                    </form>
               </div>
          </div>
</div>

<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Name</th>
<th>Date Of Birth</th>
<th>Gender</th>
<th>Description</th>
<th>Created at</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
     @forelse ($families as $familie )
          <tr>
          <td>
             
                    
             {{ $familie->rep_name }}
              
          </td>
          <td>{{ $familie->dob  }}</td>
          <td>{{ $familie->gender }}</td>
          <td>{{ $familie->relationship_status }}</td>
        
          <td>{{  $familie->created_at }}</td>
          <td class="text-center">
               <div class="actions">
                    <a href="{{ route('families.show',[$familie->id]) }}" class="btn btn-sm bg-success-light mr-2">
                    <i class="fe fe-eye"></i> View
                    </a>
                    <a href="{{ route('families.edit',[$familie->id]) }}" class="btn btn-sm bg-success-light mr-2">
                    <i class="fe fe-pencil"></i> Edit
                    </a>
                    <a href="{{ route('families.delete',[$familie->id]) }}" class="btn btn-sm bg-danger-light">
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