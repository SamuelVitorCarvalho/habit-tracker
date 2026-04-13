<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SiteController extends Controller
{
  // GET
  public function index(): View
  {
    return view('home');
  }
}
