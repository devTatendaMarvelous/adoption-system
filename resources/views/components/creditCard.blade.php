<link rel="stylesheet" href="{{ asset('card.css') }}">

<div class="ccard " id="credit">
  <figure class="card__figure">
    <img src="https://conta.nubank.com.br/images/nu-white.png" class="card__figure--logo">
  </figure>
<div class="card__reader">
  <div class="card__reader--risk card__reader--risk-one"></div>
  <div class="card__reader--risk card__reader--risk-two"></div>
   <div class="card__reader--risk card__reader--risk-three"></div>
  <div class="card__reader--risk card__reader--risk-four"></div>
</div>
<input type="text" class="card__number col-12 text center" maxlength="16" name="" id="" placeholder="Card Number Here">
{{-- <p class="card__number">5032 9334 3764 9846</p> --}}
<div class="card__dates">
  <span class="card__dates--first">
     09/22</span>
  <span class="card__dates--second">09/23</span>
</div>

     <input type="text" class="card__name col-12 text center" maxlength="16" name="" value="{{ Auth::user()->name }}" placeholder="Card Holder Name Here">
<div class="card__flag">
  <div class="card__flag--globe"></div>
  <div class="card__flag--red"></div>
   <div class="card__flag--yellow"></div>
</div>
</div>

<script>
     function hide() {
  var element = document.getElementById("credit");
  element.classList.add("hidden");
} 
 function show() {
  var element = document.getElementById("credit");
  element.classList.remove("hidden");
} 
</script>