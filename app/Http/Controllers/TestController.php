<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function dashboard()
    {
        return view('backend.pages.dashboard.index');
    }
    public function samplePage()
    {
        return view('backend.pages.sample-page');
    }
}
