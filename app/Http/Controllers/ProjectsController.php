<?php

namespace App\Http\Controllers;
use App\Models\ProjectsTableModel;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    function onSelectThree(){
        $result=ProjectsTableModel::limit(3)->get();
        return $result;
    }
    function onSelectAll(){
        $result=ProjectsTableModel::all();
        return $result;
    }
    function onSelectDetails($id){
        $myId=$id;
        $result=ProjectsTableModel::where(['id'=>$myId])->get();
        return $result;
    }
}
