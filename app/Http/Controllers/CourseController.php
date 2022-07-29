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
    function onSelectDetails($id){
        $myId=$id;
        $result=CourseTableModel::where(['id'=>$myId])->get();
        return $result;
    }
}
