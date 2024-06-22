<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data =array (
            'hobby' => 'My hobbies are cooking, I also do painting.',
            
        );

        return view('Hobbies', $data);
    }
}
