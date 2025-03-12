<?php

namespace App\Http\Controllers;
use PDF;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    public function index()
    {
        return view('home');
    } 
    public function test()
    {
        return view('reports.attendance');
    }
}
