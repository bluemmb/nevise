<?php

namespace App\Http\Controllers\Plugin;

interface PluginAgent
{
    public function View($project , $module , $plugin);
    public function Editor($project , $module , $plugin);
    public function SearchView($project , $module , $plugin , $text);
}

