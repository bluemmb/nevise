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

    public function index($id)
    {
        $plugins = $this->lib->selectAll($id);
        return view("module.view" , ["plugins" => $plugins] );
    }
}