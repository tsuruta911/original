<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

// 追記
use App\Tennis;

class TennisController extends Controller
{
    public function index(Request $request)
    {
        return view('toppage');
    }
    
}