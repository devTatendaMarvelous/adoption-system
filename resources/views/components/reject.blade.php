<div class="modal fade" id="exampleModal{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Appointment Rejection Notes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('appointments.reject',[ $appointment->id])}}" method="post">
          @csrf
           <div class="modal-body">
              
               <div class="form-group">
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Department Name">
                         {{ old('description') }}
                    </textarea>
                    @error('description')
                         <p class="text-danger text-center">{{ $message }} </p>
                    @enderror
               </div>
            
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Reject</button>
           </div>
      </form>
    </div>
  </div>
</div>