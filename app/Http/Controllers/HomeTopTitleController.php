<?php

namespace App\Http\Controllers;
use App\Models\HomeEtcModel;
use Illuminate\Http\Request;

class HomeTopTitleController extends Controller
{
    function onSelectAll(){
        $result=HomeEtcModel::select('home_title','home_subtitle')->get();
        return $result;
    }
}
