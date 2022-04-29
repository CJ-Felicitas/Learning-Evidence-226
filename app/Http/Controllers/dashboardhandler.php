<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Jobrequest;
class dashboardhandler extends Controller
{
    function index(){
        return view('dashboard');
    }

  
    
}
