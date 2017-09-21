<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;

use App\Http\Controllers\Project\Lib as Module_Lib;

class View extends Controller
{
    public $lib;

    function __construct()
    {
        $this->lib=new Module_Lib();
    }

    public function index($pid, $mid)
    {
        $plugins = $this->lib->selectAll($mid);
        return view("module.view" , ["plugins" => $plugins] );
    }
}