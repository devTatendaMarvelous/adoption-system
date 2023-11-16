<?php

namespace App\Http\Controllers;

use App\Models\Orphanage;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OrphanagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orphanages.index')->with('orphanages',Orphanage::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orphanages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        $orphanage = $request->validate([
            "name" => "required",
            "email" => "required|unique:users",
            "phone" => "required",
            "address" => "required",
        ]);
        if ($request->has('photo')) {
            $orphanage['photo'] = $request->file('photo')->store('profilePhotos', 'public');
        }
            $orphanage['role'] ='Orphanage';
            $orphanage['password'] = Hash::make('password');
        $id = User::create($orphanage)->id;
        $orphanage['user_id'] = $id;
        Orphanage::create($orphanage);
        Toastr::success('Orphanage added successfully 🤗', 'Success');
        return redirect('orphanages');
    }catch(\Exception $e)
{
    return $e->getMessage();
}

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('orphanages.edit')->with('orphanage',Orphanage::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $orphanage = $request->validate([
                "name" => "required",
                "email" => "required",
                "phone" => "required",
                "address" => "required",
            ]);
            if ($request->has('photo')) {
                $orphanage['photo'] = $request->file('photo')->store('profilePhotos', 'public');
            }
            $orphanage['password'] = Hash::make('password');
            $uid=Orphanage::find($id);
            $uid->update($orphanage);
            User::find($uid->user_id)->update($orphanage);

            Toastr::success('Orphanage updated successfully 🤗', 'Success');
            return redirect('orphanages');
        }catch(\Exception $e)
        {
            return $e->getMessage();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
