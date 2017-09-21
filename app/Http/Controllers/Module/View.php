<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Module\Lib as Module_Lib;

class View extends Controller
{
    public $lib;

    function __construct()
    {
        $this->lib=new Module_Lib();
    }

    public function index($pid, $mid)
    {
        $project = $this->lib->getProjectDetails($pid);
        $module  = $this->lib->getModuleDetails($mid);
        $plugins = $this->lib->selectAll($mid);

        return view("module.view" , ["plugins" => $plugins , "project" => $project , "module" => $module] );
    }
}