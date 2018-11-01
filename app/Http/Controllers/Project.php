<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Project extends Controller
{
  public function index()
  {
    return view('project.index');
  }
}
