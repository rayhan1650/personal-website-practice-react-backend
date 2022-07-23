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
    function onSelectDetails(Request $request){
        $id=$request->input('id');
        $result=ProjectsTableModel::where(['id'=>$id])->get();
        return $result;
    }
}
