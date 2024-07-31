<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TherapistController extends Controller
{
    public function details()
    {
        return view('therapist.details');
    }
}
