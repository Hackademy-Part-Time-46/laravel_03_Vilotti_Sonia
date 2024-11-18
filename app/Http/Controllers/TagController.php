<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function home() {
        $linguaggiProgrammazione = [
            "PHP",
            "JavaScript",
            "Python",
            "Java",
            "C",
            "Ruby",
            "Swift",
            "Go",
            "Kotlin"
        ];
        return view('home', compact('linguaggiProgrammazione'));
    }
    public function show($nomeLinguaggio){
        return view('show', ['nomeLinguaggio'=> $nomeLinguaggio]);
    }
}
