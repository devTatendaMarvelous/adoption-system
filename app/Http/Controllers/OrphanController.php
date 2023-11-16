<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use App\Models\Orphan;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class OrphanController extends Controller
{
     public function index()
    {
//        dd(auth()->user()->id);
         if(auth()->user()->role=='Orphanage'){
             $orphans=Orphan::where('orphanage_id',auth()->user()->id)->get();
         }else{
             $orphans=Orphan::all();
         }


       return view('orphans.index')->with('orphans',$orphans)->with('carbon',Carbon::class);
    }
    public function transfers()
    {
       $transfers=Transfer::join('users','users.id','=','transfers.initiator')
                ->join('orphans','orphans.id','=','transfers.orphan_id')->get([
                    'transfers.*',
                    'users.name',
                    'orphans.orphan_name'
                ]);
                // dd($transfers);

       return view('orphans.transfers')->with('transfers',$transfers)->with('carbon',Carbon::class);
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
        $orphan['orphanage_id']=auth()->user()->id;
        Orphan::create($orphan);
        Toastr::success('Orphan added successfully 🤗','Success');
        return redirect('orphans');

    }

public function convertDate($dt)
{
    $date = str_replace('/', '-', $dt);
                    $newDate = date("Y-m-d", strtotime($date));
                    return $newDate;
}

    public function csv(Request $request)
    {
        $csvData=fopen($request->file('csv'),'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                try{
                    Orphan::create([
                        'orphan_name' => $data['0'],
                        'dob' =>  $this->convertDate($data['1']),
                        'gender' => $data['2'],
                        'birth_id' => $data['3'],
                        'description' => $data['4'],
                        'orphanage_id' => auth()->user()->id,
                        'status' => 'Available'
                    ]);
                }catch(Exception $e){
                    dd($e->getMessage());
                }
            }
            $transRow = false;
        }
        fclose($csvData);


        Toastr::success('Orphans added successfully 🤗','Success');
        return redirect('orphans');
    }



    public function edit($id)
    {
        $orphan=Orphan::find($id);
       return view('orphans.edit')->with('orphan',$orphan);
    }
     public function transfer($id)
    {
        $orphanages=User::where('role','Orphanage')->get();

       return view('orphans.transfer')->with('id',$id)->with('orphanages',$orphanages);
    }
    public function transferSave(Request $request,$id)
    {
        try {

            $trannsfer = $request->validate([
                'orphanage_id' => 'required',
                'notes' => 'required'
            ]);

            $trannsfer['orphanage'] = User::find($trannsfer['orphanage_id'])->name;
            $trannsfer['orphan_id'] = $id;
            $trannsfer['initiator'] = Auth::user()->id;
            $trannsfer['status'] = 'Success';
            Transfer::create($trannsfer);
            $orphan = Orphan::find($id);
            $orphan['status'] = 'Transferred';
            $orphan['orphanage_id'] = $trannsfer['orphanage_id'];
            $orphan->save();

            return redirect('orphans');
        }catch(\Exception $e){
            return $e->getMessage();
        }
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
        $orphanUpdated['orphanage_id']=auth()->user()->id;

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
