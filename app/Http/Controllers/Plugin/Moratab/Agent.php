<?php

namespace App\Http\Controllers\Plugin\Moratab;

use App\Http\Controllers\Plugin\PluginAgent;

class Agent implements PluginAgent
{
    public function View($id) {}
    public function Editor($id) {}
    public function SearchView($id,$text) {}
}
