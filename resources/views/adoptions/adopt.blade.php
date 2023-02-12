<x-dashboard>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Orphans</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
<li class="breadcrumb-item active">Donations </li>
</ul>
</div>
</div>
</div>

<div class="row">
     @forelse ($orphans as $orphan )
          
          <div class="col-xl-3 col-sm-6 col-12">
          <div class="product">
          <div class="product-inner">
          <img alt="alt" src="{{ asset('storage/'.$orphan->photo) }}">
          <div class="cart-btns">
          <a href="{{ route('adoptions.create',[$orphan->id]) }}" class="btn btn-primary addcart-btn">Adopt</a>
          {{-- <a href="#" class="btn btn-info proedit-btn">View</a> --}}
          </div>
          </div>
          <div class="pro-desc">
          <h5><a href="product-details.html">{{ $orphan->orphan_name }}</a></h5>
          <div class="price">{{ $orphan->gender }}</div>
          </div>
          </div>
          </div>
     @empty
          
     @endforelse


</div>
</div>
</div>

</x-dashboard>