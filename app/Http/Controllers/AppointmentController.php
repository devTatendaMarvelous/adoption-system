<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create($id)
    {
         return view('appointments.create')->with('id',$id);
    }
}
