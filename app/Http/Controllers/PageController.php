<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{

    public function index()
    {

        // $trains = Train::all();

        $trains = Train::where('departure_date', '>', '2024-05-04')->get();

        return view('welcome', compact('trains'));
    }
}
