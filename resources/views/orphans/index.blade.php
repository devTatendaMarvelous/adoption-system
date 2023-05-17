
<x-dashboard>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Orphans</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">Orphans</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">

<div class="card-header">
     <div class="row">
          
                              

          <h4 class="card-title col-md-3">List of Orphans</h4>
          <button type="button" class="col-md-2 btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">
                              Upload CSV
                              </button>
                              <div class="col-md-1"></div>
          <div class="col-md-6">
               <form action="{{ route('orphans.search') }}" method="post" class="row">
                    @csrf
                    <input type="text" name="search" placeholder="Search Orphan" class="form-confrol col-6">
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
<th>Birth Certificate</th>
<th>Gender</th>
<th>Description</th>
<th>Created at</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
     @forelse ($orphans as $orphan )
          <tr>
          <td>
               <h2 class="table-avatar">
                    <a href="{{ route('orphans.show',[$orphan->id]) }}"  class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ $orphan->photo? asset('storage/'.$orphan->photo):'/noimage.png'  }}" alt="Orphan "></a>
                    <a href="{{ route('orphans.show',[$orphan->id]) }}">{{ $orphan->orphan_name }}<span>  {{ $orphan->status }}</span></a>
               </h2>
          </td>
          <td>{{ $carbon::parse($orphan->dob )->format('d M Y') }}</td>
          <td>{{ $orphan->birth_id }}</td>
          <td>{{ $orphan->gender }}</td>
          <td>{{ $orphan->description }}</td>
        
          <td>{{  $carbon::parse($orphan->created_at)->format('d M Y') }}</td>
          <td class="text-center">
               <div class="actions">
                    <a href="{{ route('orphans.transfer',[$orphan->id]) }}" class="btn btn-sm bg-success-light mr-2">
                    <i class="fe fe-pencil"></i> Transfer
                    </a>
                    <a href="{{ route('orphans.edit',[$orphan->id]) }}" class="btn btn-sm bg-success-light mr-2">
                    <i class="fe fe-pencil"></i> Edit
                    </a>
                    <a href="{{ route('orphans.delete',[$orphan->id]) }}" class="btn btn-sm bg-danger-light">
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





<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Attach CSV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('orphans.csv') }}" method="post" enctype="multipart/form-data">
          @csrf
           <div class="modal-body">
              
               <div class="form-group">
                    <input type="file" name="csv"class="form-control">
               </div>
            
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Upload</button>
           </div>
      </form>
    </div>
  </div>
</div>









</x-dashboard>