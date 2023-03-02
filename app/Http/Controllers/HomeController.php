<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Orphan;
use App\Models\Adoption;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       if(Auth::user()->role==="Family"){
        return redirect('adoptions');
       }elseif(Auth::user()->role==="Donor"){
        return redirect('donations');
       }else{
        $available=Orphan::where('status','Available')->count();
        $deceased=Orphan::where('status','Deceased')->count();
        $matured=Orphan::where('status','Matured')->count();
        $adopted=Orphan::where('status','Adopted')->count();

        $appointments=Appointment::join('adoptions','adoptions.id','=','appointments.adoption_id')
        ->join('orphans','orphans.id','=','adoptions.orphan_id')
        ->join('families','families.id','=','adoptions.family_id')
        ->where('appointments.status','Pending')
        ->get([
            'appointments.*','orphans.orphan_name','families.rep_name'
        ]);


        $adoptions=Adoption::join('families','families.id','=','adoptions.family_id')->join('orphans','orphans.id','=','adoptions.orphan_id')
        ->where('adoptions.status','Pending')
            ->orderBy('id','DESC')->get(['adoptions.*','families.rep_name','orphans.orphan_name']);



           return view('home')
           ->with('available',$available)
           ->with('deceased',$deceased)
           ->with('matured',$matured)
           ->with('adopted',$adopted)
           ->with('appointments',$appointments)
           ->with('adoptions',$adoptions)
           ->with('carbon',Carbon::class);
       }
       
    }
}
