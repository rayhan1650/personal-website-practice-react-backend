<?php

namespace App\Http\Controllers;
use App\Models\InformationEtcModel;
use Illuminate\Http\Request;

class InformationEtcController extends Controller
{
    function onSelect(){
        $result=InformationEtcModel::all();
        return $result;
    }
}
