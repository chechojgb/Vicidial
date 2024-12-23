<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class ControlAdmin extends Controller
{
    public function index($route)
    {
        return view('admin.'.$route);
    }

   public function showAggentsLogged(){
        return view('admin.real-time-reports');
   }
}
