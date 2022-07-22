<?php

namespace App\Http\Controllers;
use App\Models\CourseTableModel;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function onSelectFour(){
        $result=CourseTableModel::limit(4)->get();
        return $result;
    }
    function onSelectAll(){
        $result=CourseTableModel::all();
        return $result;
    }
    function onSelectDetails(Request $request){
        $id=$request->input('id');
        $result=CourseTableModel::where(['id'=>$id])->get();
        return $result;
    }
}
