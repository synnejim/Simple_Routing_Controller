<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data =array (
            'greetings' => 'Hey! Nice to meet you I am',
            'name' => 'Synne Jim S. Navalta',
            'age' => 20,
            'address' => 'Roxas, Isabela'
        );

        return view('AboutMe', $data);
    } 
}
