<?php

namespace App\Http\Controllers\Plugin;

interface PluginAgent
{
    public function View($id);
    public function Editor($id);
    public function SearchView($id,$text);
}

