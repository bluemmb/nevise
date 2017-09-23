<?php

namespace App\Http\Controllers\Plugin\Moratab;

use App\Http\Controllers\Plugin\PluginAgent;

class Agent implements PluginAgent
{
    public function View($project , $module , $plugin)
    {
        return view( "plugin.moratab.view" ,
            [ "project" => $project , "module" => $module , "plugin" => $plugin ] );
    }

    public function Editor($project , $module , $plugin)
    {
        return view( "plugin.moratab.editor" ,
                        [ "project" => $project , "module" => $module , "plugin" => $plugin ] );
    }

    public function SearchView($project , $module , $plugin , $text)
    {

    }
}
