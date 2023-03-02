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
       
        

         
        $connected = @fsockopen("www.example.com", 80); 
                                            //website, port  (try 80 or 443)
        if ($connected){
            $is_conn = true;
            fclose($connected);
        }else{
            $is_conn = false; 
        }
         if($is_conn){
             Mail::to($emailAddress)->send(new Notifications($mailData));
         }else{
            dd('No internet at the moment','Success');
         }

        return back();
    }

}















