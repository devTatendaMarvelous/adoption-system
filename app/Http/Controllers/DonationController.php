<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Orphan;

class DonationController extends Controller
{
    public function index()
    {
        $donations=Donation::join('users','users.id','=','donations.donor_id')->orderBy('id','DESC')->get(['donations.*','users.name']);
        
        return view('donations.index')->with('donations',$donations);
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
        $donation['reference']= 'AMS'.random_int(10000,99999);
        Donation::create($donation);
        Toastr::success('Thank you for donating to us 🤗','Success');
        return redirect('donations');

    }
}
