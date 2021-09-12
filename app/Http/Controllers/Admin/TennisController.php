<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TennisController extends Controller
{
    public function add()
    {
      return view('admin.tennis.create');
    }
    //
}
