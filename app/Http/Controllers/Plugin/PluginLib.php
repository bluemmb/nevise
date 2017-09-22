<?php

namespace App\Http\Controllers\Plugin;

use App\Http\Controllers\CoreLib;
use App\Http\Controllers\Plugin\Plugins;
use Illuminate\Support\Facades\DB;

class PluginLib extends CoreLib
{
    public function __construct()
    {
        // Accessing plugins list : Plugins::$plugins
    }
}