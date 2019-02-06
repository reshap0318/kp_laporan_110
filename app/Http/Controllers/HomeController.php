<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Sentinel;
use App\Charts\Echarts;

class HomeController extends Controller
{
    public function home($value='')
    {
        return view('welcome');
    }
    public function YourhomePage($value='')
    {
        return view('home');
    }
    public function dashboard(Request $request)
    {
      return view('dashboard');
    }

    public function data(Request $request)
    {

    }

}
