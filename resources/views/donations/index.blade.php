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
     <div class="r ow">
            
                          
          <div class="col-md-">
               <form action="{{ route('donations.search') }}" method="post" class="row">
                    @csrf
                    <div class="col-4">
                           <label for="validationCustom04">Age </label>
                              <select name="age" class="form-control text-center col-" id="validationCustom04">
                                <option value="0-5">0-5</option>
                                <option value="6-10">6-10</option>
                                <option value="10-14">10-14</option>
                                <option value="15-18">15-18</option>
                           </select>
                         </div>
                         <div class="col-4">
                           <label for="validationCustom04">Gender</label>
                         <select name="type" class="form-control" id="validationCustom04">
                              <option value="0">Both</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                         </select>
                           </div>
                          
                           <button class="col-4 btn btn-info">Search</button>
                    </div>

               </form>
          </div>
     </div>

</div>
     <div class="card-body">
     <div class="table-responsive">
     <table class="table table-hover table-center mb-0" id="example">
     <thead>
     <tr>
     <th>Donated By</th>
     <th>Amount</th>
     <th>Currency</th>
     <th>Referrence Number</th>
     <th>Donation Type</th>
     <th>Date Donated</th>
     <th>Status</th>
     {{-- <th class="text-center">Action</th> --}}
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
{{--                          
                         <a href="donations/{{ $donation->id}}/delete" class="btn btn-sm bg-danger-light">
                         <i class="fe fe-trash"></i> Delete
                         </a> --}}
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