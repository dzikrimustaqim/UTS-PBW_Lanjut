<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $experiences = Experience::with('experiencecategory')->get();
        return view("home", ["experiences"=> $experiences]);
    }
}
