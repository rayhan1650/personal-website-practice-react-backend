<?php

namespace App\Http\Controllers;
use App\Models\ContactTableModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function onContactSend(Request $request){
        $contactArray=json_decode($request->getContent(),true);
        $name=$contactArray['name'];
        $email=$contactArray['email'];
        $message=$contactArray['message'];
    
        $result=ContactTableModel::insert(['name'=>$name,'email'=>$email,'message'=>$message]);

        if($result){
            return 1;
        }
        else{
            return 0;
        }
    }
}
