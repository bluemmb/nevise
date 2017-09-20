<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class View extends Controller
{
    public function index(){
        return view("dashboard.view");
    }

}
