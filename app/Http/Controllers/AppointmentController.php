<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments=Appointment::join('adoptions','adoptions.id','=','appointments.adoption_id')
        ->join('orphans','orphans.id','=','adoptions.orphan_id')
        ->join('families','families.id','=','adoptions.family_id')
        ->get([
            'appointments.*','orphans.orphan_name','families.rep_name'
        ]);

        return view('appointments.index')->with('carbon',Carbon::class)->with('appointments',$appointments);
    }

    public function create($id)
    {
         return view('appointments.create')->with('id',$id);
    }

    public function store(Request $request)
    {
        $appointment=$request->validate([
            'adoption_id'=>'required','date'=>'required','session'=>'required',
        ]);

        Appointment::create($appointment);
        Toastr::success('Appointment Set 🤗','Success');
        return redirect('appointments');

    }
    public function edit($id)
    {
        $appointment=Appointment::find($id);
        return view('appointments.edit')->with('appointment',$appointment); 
    }

    public function update(Request $request,$id)
    {
        $appointment=Appointment::find($id);
        $update=$request->validate([
            'date'=>'required','session'=>'required',
        ]);
        $appointment->update($update);
        Toastr::success('Appointment Updated 🤗','Success');
        return redirect('appointments');
    }
   
    public function approve($id)
    {
        $appointment=Appointment::find($id);
        $appointment->status='Approved';
        $appointment->save();

        Toastr::success('Appointment Approved 🤗','Success');
        return redirect('appointments');
    }
     public function reject($id)
    {
        $appointment=Appointment::find($id);
        $appointment->status='Rejected';
        $appointment->save();

        Toastr::success('Appointment Rejected 😒','Success');
        return redirect('appointments');
    }
    public function destroy(Request $id)
    {
        Appointment::find($id)->delete();
        Toastr::success('Appointment Deleted 🤗','Success');
        return redirect('appointments');
    }

}
