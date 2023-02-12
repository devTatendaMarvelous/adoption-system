<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\StoreAdoptionRequest;
use App\Http\Requests\UpdateAdoptionRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Orphan;
class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adoptions=Adoption::join('families','families.id','=','adoptions.family_id')->join('orphans','orphans.id','=','adoptions.orphan_id')->orderBy('id','DESC')->get(['adoptions.*','families.rep_name','orphans.orphan_name']);
        
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
