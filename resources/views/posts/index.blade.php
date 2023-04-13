
<x-dashboard>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">posts</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">posts</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">

<div class="card-header">
<h4 class="card-title">List of posts</h4>
</div>

<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Posted By</th>
<th>Title</th>
<th>Body</th>
<th>File</th>
<th>Date posted</th>

<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
     @forelse ($posts as $post )
          <tr>
          <td>
               <h2 class="table-avatar">
                    
                    <a href="">{{ $post->name }}</a>
               </h2>
          </td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->body }}</td>
          <td>@if ($post->file)
                    <a href="{{ asset('storage/'.$post->file) }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary">View File</a>
               
               @else
                    <span> no file</span>
               @endif
                
               
          </td>
          <td>{{ $post->created_at }}</td>
          
        @if (Auth::user()->role==='Admin')
        
               <td class="text-center">
                    <div class="actions">
                         <a href="{{ route('posts.edit',[$post->id]) }}" class="btn btn-sm bg-success-light mr-2">
                         <i class="fe fe-pencil"></i> Approve
                         </a>
                       
                    </div>
               </td>
        @endif
        @if (Auth::user()->id===$post->user_id)
        
               <td class="text-center">
                    <div class="actions">
                         {{-- <a href="{{ route('posts.edit',[$post->id]) }}" class="btn btn-sm bg-success-light mr-2">
                         <i class="fe fe-pencil"></i> Edit
                         </a> --}}
                         <a href="{{ route('posts.delete',[$post->id]) }}" class="btn btn-sm bg-danger-light">
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