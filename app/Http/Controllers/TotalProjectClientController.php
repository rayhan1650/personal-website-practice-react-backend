<?php

namespace App\Http\Controllers;
use App\Models\HomeEtcModel;
use Illuminate\Http\Request;

class TotalProjectClientController extends Controller
{
    function onSelectAll(){
        $result=HomeEtcModel::select('total_projects','total_clients')->get();
        return $result;
    }
}
