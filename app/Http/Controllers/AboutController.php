<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index() 
    {
        // Hanya mengambil data dengan id 1 hingga 6
        $abouts = About::all();

        // Mengirimkan data ke view
        return view('home', compact('about'));
    } 
}
