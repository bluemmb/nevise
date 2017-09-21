<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\Lib as Dashboard_Lib;

class View extends Controller
{
    public $lib;

    function __construct()
    {
        $this->lib = new Dashboard_Lib();
    }

    public function index(){
        $projects = $this->lib->selectAll();
        return view("dashboard.view" , ["projects" => $projects] );
    }

}
