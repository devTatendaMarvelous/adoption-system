<x-dashboard>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
     <h3 class="page-title">Donations</h3>
     <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
          <li class="breadcrumb-item active">Donations</li>
     </ul>
</div>
</div>
</div>
     <div class="row">
     <div   class="col-sm-12">
     <div class="card card-table">
     <div class="card-header">
     
     <div class="row">

          <h4 class="card-title col-md-6">List of Donations</h4>
          <div class="col-md-6">
               <form action="{{ route('donations.search') }}" method="post" class="row">
                    @csrf
                    <input type="text" name="search" placeholder="Search Donation" class="form-confrol col-6">
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
     <th>Donated By</th>
     <th>Amount</th>
     <th>Currency</th>
     <th>Referrence Number</th>
     <th>Donation Type</th>
     <th>Date Donated</th>
     <th>Status</th>
     <th class="text-center">Action</th>
     </tr>
     </thead>
     <tbody>
          @forelse ($donations as $donation )
               <tr>
               <td>
                    {{$donation->name}}
               </td>
               <td>{{ $donation->amount }}</td>
               <td>{{ $donation->currency }}</td>
               <td>{{ $donation->reference }}</td>
               <td>{{ $donation->type }}</td>
               <td>{{ $carbon::parse($donation->created_at )->format('d M Y') }}</td> 
               <td>{{ $donation->status }}</td> 
               <td class="text-center">
                    <div class="actions">
                         
                         <a href="donations/{{ $donation->id}}/delete" class="btn btn-sm bg-danger-light">
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