<?php

namespace App\Http\Controllers;
use App\Models\ContactTableModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function onContactSend(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $message=$request->input('message');
    
        $result=ContactTableModel::insert(['name'=>$name,'email'=>$email,'message'=>$message]);

        if($result){
            return 1;
        }
        else{
            return 0;
        }
    }
}
