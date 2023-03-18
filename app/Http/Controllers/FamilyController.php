<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Family;
use App\Models\Survey;

class FamilyController extends Controller
{
   public function index()
   {
      $families=Family::all();
    return view('families.index')->with('families',$families);
   }
public function search(Request $request)
    {

        $families=Family::where('rep_name','like',"%{$request->search}%")
        ->orWhere('id_num','like',"%{$request->search}%")
        ->orWhere('relationship_status','like',"%{$request->search}%")
        ->orderBy('id','DESC')->get();

    return view('families.index')->with('families',$families);
    }

   public function create()
   {
    return view('auth.wizard');
   }


   public function store(Request $request)
   {
      
     $family=$request->validate([
            'rep_name'=>'required',
            'dob'=>'required',
            'id_num'=>'required',
            'gender'=>'required',
            'language'=>'required',
            'occupation'=>'required',
            'relationship_status'=>'required',
            'email'=>'required',
            'password'=>'required',
            'foster_training'=>'required',
            'foster_parent'=>'required',
            'license'=>'required',
            'date_completed'=>'required',
            'race'=>'required',

     ]);


     $fam=Family::create($family);

     $family['name']=$family['rep_name'];
     $family['role']='Family';
     $family['family_id']=$fam->id;
     Survey::create($family);
     
     RegisterController::create($family);
     if (Auth::check()) {
         Toastr::success('Family added successfully 🤗','Success');
         return redirect('families');
      }else{
         return redirect('login');
      }
   }

   public function edit(Request $request,$id)
   {

      $family=Family::find($id);
      return view('families.edit')->with('family',$family);
   }
   public function show($id)
   {

      $family=Family::join('surveys','surveys.family_id','=','families.id')
      ->where('families.id',$id)->get([
         'families.*',
         'surveys.foster_training',
         'surveys.foster_parent',
         'surveys.license',
           'surveys.date_completed',
            'surveys.race',
      ]);
      
      return view('families.show')->with('family',$family[0]);
   }
    public function update(Request $request,$id)
   {
     $family=$request->validate([
            'rep_name'=>'required',
            'dob'=>'required',
            'id_num'=>'required',
            'gender'=>'required',
            'language'=>'required',
            'occupation'=>'required',
            'relationship_status'=>'required',

     ]);

     Family::find($id)->update($family);


      Toastr::success('Family Updated successfully 🤗','Success');
      return redirect('families');
   }
    public function destroy($id){



        $family=Family::find($id);


        $family->delete();
        Toastr::success('family deleted successfully 🤗','Success');
        return redirect('families');

    }
}
