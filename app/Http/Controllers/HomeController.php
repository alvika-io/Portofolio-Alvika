<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Certificate;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data dari model Home
        $home = Home::all();

        // Ambil data dengan id 1 hingga 6 dari model About (contoh filter)
        $abouts = About::all();

        $skill = Skill::all();

        $project = Project::whereIn('id', [1, 7])->get();


        $contact = Contact::find(1);

        $certificate = Certificate::all();
        // Mengirimkan data ke view
        return view('home', compact('home', 'abouts', 'skill', 'project',  'contact','certificate'));
    }
}
