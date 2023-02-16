<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Orphan;
use App\Models\Donation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function index()
    {
        $donations=Donation::join('users','users.id','=','donations.donor_id')->orderBy('id','DESC')->get(['donations.*','users.name']);
        
        return view('donations.index')->with('donations',$donations)
        ->with('carbon',Carbon::class);
    }
     public function search(Request $request)
    {
        // dd($request->search);
       ;
        $donations=Donation::join('users','users.id','=','donations.donor_id')->where('reference','like',"%{$request->search}%")->orWhere('currency','like',"%{$request->search}%")->orWhere('status','like',"%{$request->search}%")->orWhere('type','like',"%{$request->search}%")->orderBy('id','DESC')->get(['donations.*','users.name']);
        
        return view('donations.index')->with('donations',$donations)
        ->with('carbon',Carbon::class); 
    }
    public function donate()
    {
        $orphans=Orphan::orderBy('id','DESC')->get();
        return view('donations.individual')->with('orphans',$orphans);
    }
    public function create($id)
    {
        return view('donations.create')->with('id',$id);
    }

    public function store(Request $request)
    {
        $donation=$request->validate([
            'amount'=>'required',
            'type'=>'required',
            'currency'=>'required',
        ]);

        $donation['status']='Success';
        $donation['donor_id']=Auth::user()->id;
        $donation['reference']= 'AMS-D'.random_int(10000,99999);
        Donation::create($donation);
        Toastr::success('Thank you for donating to us 🤗','Success');
        return redirect('donations');

    }
}
