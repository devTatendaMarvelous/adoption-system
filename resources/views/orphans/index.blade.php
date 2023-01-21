
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
<h4 class="card-title">List of Orphans</h4>
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
     @forelse ($orphans as $orphan )
          <tr>
          <td>
               <h2 class="table-avatar">
                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ $orphan->photo? asset('storage/'.$orphan->photo):'assets/img/profiles/avatar-03.jpg' }}" alt="Orphan "></a>
                    <a href="profile.html">{{ $orphan->orphan_name }}<span>  {{ $orphan->status }}</span></a>
               </h2>
          </td>
          <td>{{ $carbon::parse($orphan->dob )->format('d M Y') }}</td>
          <td>{{ $orphan->gender }}</td>
          <td>{{ $orphan->description }}</td>
        
          <td>{{  $carbon::parse($orphan->created_at)->format('d M Y') }}</td>
          <td class="text-center">
               <div class="actions">
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
</x-dashboard>