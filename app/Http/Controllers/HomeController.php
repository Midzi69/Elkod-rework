<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class HomeController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('welcome', compact('projects'));
    }

    // Multi-Language

    // English
    public function indexEn() {
        $projects = Project::all();
        return view('language.welcome-en', compact('projects'));
    }
    // Deutsch
    public function indexDe() {
        $projects = Project::all();
        return view('language.welcome-de', compact('projects'));
    }


}
