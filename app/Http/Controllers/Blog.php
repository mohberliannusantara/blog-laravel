<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
  public function index()
  {
    return view('blog.index');
  }

  public function show($value)
  {
    $page = 'ini pages percobaan';
    $users = ['Lian', 'Mimi', 'Indra'];
    return view('blog.view', ['blog' => $value, 'page' => $page, 'users' => $users]);
  }

  public function create()
  {
    return view('blog.create');
  }

  public function store(Request $request)
  {
    return;
  }
}
