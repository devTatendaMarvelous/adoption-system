<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Wrappers\MailWrapper;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $appointment=Appointment::join('adoptions','adoptions.id','=','appointments.adoption_id')
        ->join('families','families.id','=','adoptions.family_id')
        ->where('appointments.id',$id)->get(['appointments.*','families.email']);
        

        $appointment[0]->status='Approved';
        $appointment[0]->save();


        MailWrapper::emailNotify($appointment[0]->email,[
                    'title'=>'Appointment Approval',
                    'body'=>'Dear client, please be advised that your appointment  with us has been approved for the date '.Carbon::parse($appointment[0]->date)->format('d M Y')
                ]);
        Toastr::success('Appointment Approved 🤗','Success');
        return redirect('appointments');
    }
     public function reject($id)
    {
        $appointment=Appointment::join('adoptions','adoptions.id','=','appointments.adoption_id')
        ->join('families','families.id','=','adoptions.family_id')
        ->where('appointments.id',$id)->get(['appointments.*','families.email']);

        $appointment[0]->status='Rejected';
        $appointment[0]->save();

        MailWrapper::emailNotify($appointment[0]->email,[                    
                    'title'=>'Appointment Rejection',
                    'body'=>'Dear client, please be advised that your appointment  with us for the date '.Carbon::parse($appointment[0]->date)->format('d M Y').' has been rejected' 
                ]);
                
        Toastr::success('Appointment Rejected 😒','Success');
        return redirect('appointments');
    }


    public function destroy(Request $id)
    {
        Appointment::find($id)->delete();
        Toastr::success('Appointment Deleted 🤗','Success');
        return redirect('appointments');
    }


    public function terminate()
    {
        $appointments=Appointment::join('adoptions','adoptions.id','=','appointments.adoption_id')
        ->join('families','families.id','=','adoptions.family_id')
        ->get(['appointments.*','families.email']);
        foreach($appointments as $appointment){

            
            if($appointment->status==='Terminated'){
                continue;
            }else{

                $date=Carbon::parse($appointment->date);
                $yest=$date->isYesterday();
                $tomr=$date->isTomorrow();
                //  dd($appointment->status,$tomr,$yest);

                if($yest===true){
                    
                    $appointment->status='Terminated';
                    $appointment->save();

                    MailWrapper::emailNotify($appointment->email,[
                        
                        'title'=>'Termination of the adoption appointment',
                        'body'=>'Dear client, please be advised that your appointment  with us for the day '.$date->format('d M Y').' has been  terminated.'
                    ]);

                }elseif($tomr==true){
                    if($appointment->status==='Reminded'){
                        continue;
                    }
                        $appointment->status='Reminded';
                        $appointment->save();
                        MailWrapper::emailNotify($appointment->email,[
                            
                            'title'=>'testing',
                            'body'=>'Dear client, please be reminded of the appointment you have with us tomorrow'
                        ]);
                    

                }
            }
            
             
        }
        
        return redirect('home');
    }

}
