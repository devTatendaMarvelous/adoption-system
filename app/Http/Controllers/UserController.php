<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
    public function edit()
    {
        $user=User::find(Auth::user()->id);
        return view('auth.profile')->with('user',$user);
    }
    public function update(Request $request)
    {
        
        $user=$request->validate(
             [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            
                 ]
             );
             if($request->has('photo')){
                 $user['photo']=$request->file('photo')->store('profilePhotos','public');
             }
            
           User::find(Auth::user()->id)->update($user);
           Toastr::success('Profile updated successfully 🤗','Success');
        return redirect('home');
    }
}
