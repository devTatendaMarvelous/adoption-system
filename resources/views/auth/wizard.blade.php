@extends('layouts.wizard')

@section('content')
<style>
.form-check{
    display: inline-block;
}
.form-check label{
    float: right;
    margin-left: 20px;
}


</style>
<form id="regForm" action="{{ route('families.store') }}" method="POST" class="col-12">
    @csrf

<h1>Family Register:</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">
    <em> You are only eligible to register if you have a home study or foster care license and are approved in your state of residence to adopt from foster care.</em>

    <div class="row mt-5">
    <div class="col-md-3">
        <h5>Have you taken foster care training classes? </h5>
                <div class="form-check">
                    <input class="form-check-input  " type="radio" name="foster_training" onclick="showTextbox()"id="yes" value="1">
                    <label class="form-check-label last" for="yes">
                        Yes 
                    </label>
            </div>
            
            <div class="form-check">
                <div class="">
            <input class="form-check-input  " type="radio" name="foster_training" id="no"  onclick="hideTextbox()"value="0">
            <label class="form-check-label " for="no">
                No
            </label>
            </div>
            </div>
            <div class="form-check">
                <div class="">
                    <input class="form-check-input " style="margin-left: -55px;"  type="radio" name="foster_training"onclick="hideTextbox()" id="idk" value="2">
                    <label class="form-check-label " for="idk" >
                        Do not know 
                    </label>
            </div>
            </div>
            
    </div>
    <div class="col-md-3">
        <h5>Are you or have you ever been a foster parent?</h5>
            <div class="form-check">
                <div class="">
                    <input class="form-check-input  " type="radio" name="foster_parent" id="yes" value="1">
                    <label class="form-check-label last" for="yes">
                        Yes 
                    </label>
            </div>
            </div>
            <div class="form-check">
                <div class="">
            <input class="form-check-input  " type="radio" name="foster_parent" id="no" value="0">
            <label class="form-check-label " for="no">
                No
            </label>
            </div>
            </div>
            
    </div>
    <div class="col-md-3">
        <h5>Do you have a current home study or foster care license in your state of residence? </h5>
                <div class="form-check">
                    <input class="form-check-input  " type="radio" name="license" id="yesl" value="1">
                    <label class="form-check-label last" for="yesl">
                        Yes 
                    </label>
            </div>
            
            <div class="form-check">
                <div class="">
            <input class="form-check-input  " type="radio" name="license" id="l"  value="0">
            <label class="form-check-label " for="l">
                No
            </label>
            </div>
            </div>
            <div class="form-check">
                <div class="">
                    <input class="form-check-input " style="margin-left: -55px;"  type="radio" name="license" id="l" value="2">
                    <label class="form-check-label " for="l" >
                        Do not know 
                    </label>
            </div>
            </div>
            
    </div>
    <div class="col-md-3">
        <h5>Date home study or license completed</h5>
                
            <div class="form-check">
                <div class="">
                    <input class="form-control "   type="date" name="date_completed" id="l" value="2">
                    
            </div>
            </div>
            
    </div>
   
  </div>
</div>

<div class="tab">Personal Details:

    <div class="row">
        <div class="col-md-3">
               <input class="form-control " name="rep_name" placeholder="Full Name" >
        </div>
   
        <div class="col-md-2" >
            
               <input class="form-control " name="id_num" type="text" placeholder="Id Number" required >
        </div>
        <div class="col-md-2" style="margin-top:-23px;">
            Date Of Birth:
               <input class="form-control " name="dob" type="date" value="DOB" required >
        </div>
   
        <div class="col-md-2">
              <select name="gender" id="" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
              </select>
        </div>
   
        <div class="col-md-12 my-5 text center">
            Race:
             <div class="form-check">
                    <input type="checkbox" name="race" id=""class="form-check-input"  value="African" >
                    
                    <label class="form-check-label ml-5">African</label>
            </div> 
            <div class="form-check">
                    <input type="checkbox" name="race" id=""class="form-check-input"  value="African" >
                    
                    <label class="form-check-label ml-5">Asian</label>
            </div> 
            <div class="form-check">
                    <input type="checkbox" name="race" id=""class="form-check-input mr-5"  value="African" >
                    
                    <label class="form-check-label ml-5" > American</label>
            </div> 
              
        </div>
        <div class="col-md-3">
               <input class="form-control " name="language" placeholder="Language" >
        </div>
        <div class="col-md-3">
               <input class="form-control " name="occupation" placeholder="Occupation" >
        </div>
        <div class="col-md-3">
            <select name="relationship_status" id="" class="form-control" aria-placeholder="HI">
                    <option value="Married">Relationship Status</option>
                    <option value="Married">Married</option>
                    <option value="Single">Single</option>
                    <option value="Devorced">Devorced</option>
              </select>
              
        </div>
    </div>


</div>

<div class="tab">Login Details:

    <div class="row">
        <div class="col-md-3">
               <input class="form-control " type="email" name="email" placeholder="Email" required>
        </div>
   
        <div class="col-md-3" style="">
            
               <input class="form-control " name="password" type="password" placeholder="Password" required >
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
  <span class="step"></span>
   <span class="step"></span>
</div>

</form>


@endsection
