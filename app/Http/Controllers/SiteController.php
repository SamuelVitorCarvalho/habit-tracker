<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
  // GET
  public function index()
  {
    $name = 'John Doe';
    $habits = ['Exercise', 'Read', 'Meditate'];
    return view('home', compact('name', 'habits'));
  }

}
