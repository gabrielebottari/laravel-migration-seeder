<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $todayTrains = Train::whereDate('departure_time', '>=', Carbon::today()->toDateString())->get();
        return view('home', compact('todayTrains'));
    }
}
