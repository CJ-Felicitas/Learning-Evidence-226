<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobrequest;
class jobrequesthandler extends Controller
{
    function sendrequest(Request $req){
        $jobrequest = new Jobrequest();
        $jobrequest->name = $req->name;
        $jobrequest->email = $req->email;
        $jobrequest->phonenumber=$req->phonenumber;
        $jobrequest->save();
        return redirect('/');
    }
}
