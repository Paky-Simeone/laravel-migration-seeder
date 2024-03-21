<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::whereDate('Orario_di_partenza' , today()->toDateString())->get();
        return view("home", compact("trains"));
    }
}
