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

    public function SmallView($project , $module , $plugin)
    {
        $random_number = str_random(10);

        $content = $plugin->content;
        $content_len = strlen( $content );
        $offset = min( 150 , $content_len );

        $size = strpos( $content , "\n" , $offset );
        if ($size === false) $size = $content_len;

        $content = substr( $content , 0 , $size );
        $plugin->content = $content;

        return view( "plugin.moratab.smallview" ,
            [ "project" => $project , "module" => $module , "plugin" => $plugin , "random_number" => $random_number ] );
    }

    public function SearchView($project , $module , $plugin , $text)
    {

    }
}
