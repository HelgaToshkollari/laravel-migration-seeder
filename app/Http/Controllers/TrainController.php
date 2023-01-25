<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
class TrainController extends Controller
{
    function home(){
        $trains=Train::whereDate("departure_time", "2023-01-24")->get();
       //dump($trains);
        return view("home", compact("trains"));

    }

}
