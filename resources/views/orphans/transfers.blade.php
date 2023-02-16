
<x-dashboard>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Transfers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
<li class="breadcrumb-item active">Transfers</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">

<div class="card-header">
     <div class="row">

          <h4 class="card-title col-md-6">List of Transfers</h4>
          <div class="col-md-6">
               {{-- <form action="{{ route('transfers.search') }}" method="post" class="row">
                    @csrf
                    <input type="text" name="search" placeholder="Search Transfers" class="form-confrol col-6">
                    <div class="col-1"></div>
                    <button class="col-3 btn btn-info">Search</button>
               </form> --}}
          </div>
     </div>

</div>

<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Orphan Name</th>
<th>Transferred BY</th>
<th>Transferred To</th>
<th>Transfer Notes</th>
<th>Transferred On</th>
<th class="">Status</th>
</tr>
</thead>
<tbody>
     @forelse ($transfers as $transfer )
          <tr>
          <td>
               {{$transfer->orphan_name}}
          </td>
          <td>{{ $transfer->name  }}</td>
          <td>{{ $transfer->orphanage }}</td>
          <td>{{ $transfer->notes }}</td>
        
          <td>{{  $carbon::parse($transfer->created_at)->format('d M Y') }}</td>
          <td>{{ $transfer->status }}</td>
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