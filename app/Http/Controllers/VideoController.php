<?php

namespace App\Http\Controllers;
use App\Models\HomeEtcModel;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function onSelectAll(){
        $result=HomeEtcModel::select('video_description','video_url')->get();
        return $result;
    }
}
