
<x-dashboard>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Orphanage</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">Orphanage</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">

<div class="card-header">
     <div class="row">



          <h4 class="card-title col-md-3">List of Orphanages</h4>

          <div class="col-md-6">

          </div>
     </div>

</div>

<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Logo</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
     @forelse ($orphanages as $orphan )
          <tr>
          <td>
               <h2 class="table-avatar">
                    <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ $orphan->user->photo? asset('storage/'.$orphan->user->photo):'/noimage.png'  }}" alt="Orphan "></a>

               </h2>
          </td>
              <td>{{ $orphan->user->name }}</td>
              <td>{{ $orphan->user->email }}</td>
              <td>{{ $orphan->phone }}</td>
              <td>{{ $orphan->address }}</td>
          <td class="text-center">
               <div class="actions">

                    <a href="{{ route('orphanages.edit',[$orphan->id]) }}" class="btn btn-sm bg-success-light mr-2">
                    <i class="fe fe-pencil"></i> Edit
                    </a>
                    <a href="{{ route('orphanages.delete',[$orphan->id]) }}" class="btn btn-sm bg-danger-light">
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

    </div>
  </div>
</div>









</x-dashboard>
