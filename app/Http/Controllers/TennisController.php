<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

// 追記
use App\Event;

class TennisController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::all();
        return view('toppage',['posts' => $events]);
    }
    public function show($id)
    {
        $event = Event::find($id);
        return view('tennis/show',['event' => $event]);
    }
    
}