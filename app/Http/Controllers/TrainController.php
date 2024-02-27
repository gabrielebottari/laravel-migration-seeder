<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        // Ottieni la data odierna
        $today = Carbon::today()->toDateString();

        // Seleziona i treni con la data del biglietto uguale alla data odierna
        $todayTrains = Train::whereDate('ticket_date', '=', $today)->get();
        $todayDate = Carbon::now()->toFormattedDateString();

        return view('home', compact('todayTrains', 'todayDate'));
    }
}
