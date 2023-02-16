<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Orphan;
use App\Models\Transfer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OrphanController extends Controller
{
     public function index()
    {
       $orphans=Orphan::all();

          
       return view('orphans.index')->with('orphans',$orphans)->with('carbon',Carbon::class);
    }
    public function transfers()
    {
       $orphans=Orphan::all();

          
       return view('orphans.index')->with('orphans',$orphans)->with('carbon',Carbon::class);
    }


     public function search(Request $request)
    {
        // dd($request->search);
       $orphans=Orphan::where('orphan_name','like',"%{$request->search}%")
       ->orWhere('description','like',"%{$request->search}%")
       ->orWhere('status','like',"%{$request->search}%")
       ->orWhere('gender','like',"%{$request->search}%")
       ->orWhere('birth_id','like',"%{$request->search}%")
       ->get();
        
          
       return view('orphans.index')->with('orphans',$orphans)->with('carbon',Carbon::class);
    }

    public function create(){
        return view('orphans.create');
    }

    public function show($id)
    {
        $orphan=Orphan::find($id);
       return view('orphans.show')->with('orphan',$orphan);
    }
    public function store(Request $request){
        
        $orphan=$request->validate([
           	'orphan_name'=>'required',
            'dob' =>'required',
            'gender'=>'required',
             'description' 	=>'required',
             'birth_id'=>'required',
        ]);
        $orphan['photo']=$request->file('photo')->store('orphanPhotos','public');
        
        Orphan::create($orphan);
        Toastr::success('Orphan added successfully 🤗','Success');
        return redirect('orphans');
        
    }


    public function edit($id)
    {
        $orphan=Orphan::find($id);
       return view('orphans.edit')->with('orphan',$orphan);
    }
     public function transfer($id)
    {
       return view('orphans.transfer')->with('id',$id);
    }
    public function transferSave(Request $request,$id)
    {
       
        $trannsfer=$request->validate([
            'orphanage'=>'required',
            'notes'=>'required'
        ]);
        $trannsfer['orphan_id']=$id;
        $trannsfer['initiator']=Auth::user()->id;
        $trannsfer['status']='Success';

        Transfer::create($trannsfer);
        $orphan=Orphan::find($id);
        $orphan['status']='Transferred';
        $orphan->save();
        
       return redirect('orphans');
    }

    public function update(Request $request,$id){
        
        $orphanUpdated=$request->validate([
           	'orphan_name'=>'required',
            'dob' =>'required',
            'gender'=>'required',
             'description' 	=>'required',
            'status'=>'required',
        ]);

        $orphan=Orphan::find($id);

        if($request->has('photo')){
            $photo=public_path('storage\\'.$orphan->photo);
            if(File::exists($photo)){
                File::delete($photo);
            }
             $orphanUpdated['photo']=$request->file('photo')->store('orphanPhotos','public');
        }
       

        $orphan->update($orphanUpdated);
        Toastr::success($orphanUpdated['orphan_name'].' updated successfully 🤗','Success');
        return redirect('orphans');
        
    }

    public function destroy($id){
        
        

        $orphan=Orphan::find($id);

        
            $photo=public_path('storage\\'.$orphan->photo);
            if(File::exists($photo)){
                File::delete($photo);
            }
            
      
       

        $orphan->delete();
        Toastr::success('Orphan deleted successfully 🤗','Success');
        return redirect('orphans');
        
    }

}
















// $post=Post::findOrFail($id);
        //  $postFile=public_path('storage\\'.$post->image);
        //  if(File::exists($postFile)){
        //     File::delete($postFile);
        //  }
        //  $result=$post->delete();