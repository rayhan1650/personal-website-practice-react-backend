<?php

namespace App\Http\Controllers;
use App\Models\ChartDataModel;
use Illuminate\Http\Request;

class ChartDataController extends Controller
{
    function onAllSelect(){
        $result=ChartDataModel::all();
        return $result;
    }
}
