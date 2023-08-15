<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function __invoke(Request $request) 
    {
        return 'single';
    }
}
