<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.about');
    }
    public function contact()
    {
        return view('website.contact');
    }
     public function blog()
    {
        return view('website.blog')
        ->with('posts', Post::where('status','Approved')->get())
        ->with('carbon',Carbon::class);
    }

    public function show($id)
    {
        return view('website.showBlog')
        ->with('post', Post::find($id))
        ->with('carbon',Carbon::class);
    }
    public function reset()
    {
        return view('auth.reset');
    }
    public function update(Request $request){
        $data=$request->validate([
            
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'answer' => ['required'],
        ]);
      $user=User::where('email',$data['email'])->get();
      
        if(count($user)>0){
           if($user[0]->answer===$data['answer']){
            $user[0]->password=Hash::make($data['password']);
            $user[0]->save();
            Toastr::success(' Password Changed ','success');
            return redirect('login');

           }else{
            Toastr::error(' Incorrect Recovery Phrase','Error');
            return redirect()->back();
        }
        }else{
            Toastr::error(' Email not found','Error');
            return redirect()->back();
        }

    }
}
