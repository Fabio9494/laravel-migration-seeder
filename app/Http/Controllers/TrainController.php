<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        $DateAndTime = date('Y-m-d');  
        $trains = Train::where('data','=', $DateAndTime)->get();
        return view('trains.index', compact('trains'));
    }
}
