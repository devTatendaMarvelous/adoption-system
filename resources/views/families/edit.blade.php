<x-dashboard>
<style>
.form-check{
    display: inline-block;
}
.form-check label{
    float: right;
    margin-left: 20px;
}


</style>
<form id="regForm" action="{{ route('families.update',[$family->id]) }}" method="POST" class="col-12">
    @csrf

<h1>Family Update:</h1>


<div class="tab">Personal Details:

    <div class="row">
        <div class="col-md-3">
               <input class="form-control " name="rep_name" value="{{ $family->rep_name }}" >
        </div>
   
        <div class="col-md-2" >
            
               <input class="form-control " name="id_num" type="text" value="{{ $family->id_num }}" required >
        </div>
        <div class="col-md-2" style="margin-top:-23px;">
            Date Of Birth:
               <input class="form-control " name="dob" type="date" value="{{ $family->dob }}" required >
        </div>
   
        <div class="col-md-2">
              <select name="gender" id="" class="form-control">
                    <option value="{{ $family->gender }}">{{ $family->gender }}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
              </select>
        </div>
   
        
        <div class="col-md-3">
               <input class="form-control " name="language"value="{{ $family->language }}"  >
        </div>
        <div class="col-md-3">
               <input class="form-control " name="occupation" value="{{ $family->occupation }}"  >
        </div>
        <div class="col-md-3">
            <select name="relationship_status" id="" class="form-control" aria-placeholder="HI">
                    <option value="{{ $family->relationship_status }}">{{ $family->relationship_status }}</option>
                    
                    <option value="Married">Married</option>
                    <option value="Single">Single</option>
                    <option value="Devorced">Devorced</option>
              </select>
              
        </div>
    </div>


</div>



<div style="overflow:auto;">
  <div style="float:right; display:inline-block">
    <button type="button" class="btn btn-primary btn-block" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" class="btn btn-primary btn-block" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  
</div>

</form>
</x-dashboard>