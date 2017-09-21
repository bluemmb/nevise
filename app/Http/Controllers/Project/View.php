<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;

use App\Http\Controllers\Project\Lib as Project_Lib;

class View extends Controller
{
    public $lib;

    function __construct()
    {
        $this->lib=new Project_Lib();
    }

    public function index($id)
    {
        $modules = $this->lib->selectAll($id);
        return view("project.view" , ["modules" => $modules] );
    }
}