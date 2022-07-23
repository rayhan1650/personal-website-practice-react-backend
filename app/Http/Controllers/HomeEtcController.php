<?php

namespace App\Http\Controllers;
use App\Models\HomeEtcModel;
use Illuminate\Http\Request;

class HomeEtcController extends Controller
{
    function onSelectVideo(){
        $result=HomeEtcModel::select('video_description','video_url')->get();
        return $result;
    }

    function onSelectProjectClient(){
        $result=HomeEtcModel::select('total_projects','total_clients')->get();
        return $result;
    }

    function onSelectTechDesc(){
        $result=HomeEtcModel::select('tech_description')->get();
        return $result;
    }

    function onSelectHomeTitle(){
        $result=HomeEtcModel::select('home_title','home_subtitle')->get();
        return $result;
    }
}
