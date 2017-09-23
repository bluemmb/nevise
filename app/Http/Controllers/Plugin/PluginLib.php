<?php

namespace App\Http\Controllers\Plugin;

use App\Http\Controllers\CoreLib;
use App\Http\Controllers\Plugin\Lib as Plugin_Lib;

class PluginLib extends CoreLib
{
    public $lib;

    public function __construct()
    {
        // Accessing plugins list : Plugins::$plugins
        $this->lib = new Plugin_Lib();
    }
}