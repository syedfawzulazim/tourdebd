<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminPagesController extends Controller
{

  public function index()
  {
    return view ('admin.pages.index');
  } 
}
