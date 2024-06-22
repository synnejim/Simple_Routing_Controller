<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data =array (
            'skills1' => 'Knowledgeable in Java, HTML, and CSS',
            'skills2' => 'Proficient in Figma: Experienced in using Figma for designing user interfaces, creating interactive prototypes, and collaborating with team members for efficient design workflows.'
        );

        return view('Skills', $data);
    } 
}
