<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Orphan;
use App\Models\Adoption;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAdoptionRequest;
use App\Http\Requests\UpdateAdoptionRequest;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role==='Admin'){

            $adoptions=Adoption::join('families','families.id','=','adoptions.family_id')->join('orphans','orphans.id','=','adoptions.orphan_id')
            ->orderBy('id','DESC')->get(['adoptions.*','families.rep_name','orphans.orphan_name']);
        }else{
            $id=Family::where('email',Auth::user()->email)->get('families.id')[0];
        
            $adoptions=Adoption::join('families','families.id','=','adoptions.family_id')->join('orphans','orphans.id','=','adoptions.orphan_id')
            ->where('family_id',$id->id)->orderBy('id','DESC')->get(['adoptions.*','families.rep_name','orphans.orphan_name']);
        }


       
        return view('adoptions.index')->with('adoptions',$adoptions);
    }

     public function search(Request $request)
    {

      $adoptions=Adoption::join('families','families.id','=','adoptions.family_id')
      ->join('orphans','orphans.id','=','adoptions.orphan_id')
      ->where('ref','like',"%{$request->search}%")
       ->orWhere('adoptions.status','like',"%{$request->search}%")
       ->orderBy('id','DESC'
       )->get(['adoptions.*','families.rep_name','orphans.orphan_name']);

       
        return view('adoptions.index')->with('adoptions',$adoptions);
    }


     public function adopt()
    {
        $orphans=Orphan::orderBy('id','DESC')->get();
        return view('adoptions.adopt')->with('orphans',$orphans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $orphan['family_id']=Auth::user()->id;
        $orphan['orphan_id']=$id;
        $orphan['ref']= 'AMS-A'.random_int(10000,99999);
        Adoption::create($orphan);
        Toastr::success('Adoption request created 🤗','Success');
        return redirect('adoptions');
        
    }
     public function approve($id)
    {
        $adoption=Adoption::find($id);
        $adoption->status='Approved';
        $adoption->save();

        Toastr::success('adoption Approved 🤗','Success');
        return redirect('adoptions');
    }
     public function reject($id)
    {
        $adoption=Adoption::find($id);
        $adoption->status='Rejected';
        $adoption->save();

        Toastr::success('adoption Rejected 😒','Success');
        return redirect('adoptions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdoptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdoptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function show(Adoption $adoption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function edit(Adoption $adoption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdoptionRequest  $request
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdoptionRequest $request, Adoption $adoption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adoption $adoption)
    {
        //
    }
}
