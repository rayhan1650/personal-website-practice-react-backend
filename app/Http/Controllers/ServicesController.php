<?php

namespace App\Http\Controllers;
use App\Models\ServicesTableModel;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    function onSelect(){
        $result=ServicesTableModel::all();
        return $result;
    }
}
