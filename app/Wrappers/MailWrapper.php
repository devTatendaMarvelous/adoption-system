<?php

namespace App\Wrappers;


use App\Mail\Notifications;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class MailWrapper 
{
     public static function emailNotify($emailAddress,$data)
    {
        $mailData = [
            'title' => $data['title'],
            'body' => $data['body']
        ];
         
        Mail::to($emailAddress)->send(new Notifications($mailData));
           
        //Toastr::success('Email Sent','Success');
        return back();
    }

}















