<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Module\Lib as Module_Lib;
use App\Http\Controllers\Plugin\Lib as Plugin_Lib;

class View extends Controller
{
    public $lib;
    public $plugin_lib;

    function __construct()
    {
        $this->lib=new Module_Lib();
        $this->plugin_lib=new Plugin_Lib();
    }

    public function index($pid, $mid)
    {
        $project = $this->lib->getProjectDetails($pid);
        $module  = $this->lib->getModuleDetails($mid);
        $plugins = $this->lib->selectAll($mid);

        foreach ( $plugins as $plugin )
            $plugin->smallview = $this->plugin_lib->smallview( $pid , $mid , $plugin->id );

        return view("module.view" , ["plugins" => $plugins , "project" => $project , "module" => $module] );
    }
}