<?php

namespace App\Http\Controllers;
use App\Models\HomeEtcModel;
use Illuminate\Http\Request;

class TechDescController extends Controller
{
    function onSelectAll(){
        $result=HomeEtcModel::select('tech_description')->get();
        return $result;
    }
}
