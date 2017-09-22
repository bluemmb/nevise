<?php

namespace App\Http\Controllers\Plugin;

use App\Http\Controllers\Plugin\Moratab\Agent as MoratabAgent;

class Plugins
{
    public static $plugins = [];

    public function __construct()
    {
        $plugins["moratab"] = new MoratabAgent();
    }
}

