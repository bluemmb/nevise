<?php

namespace App\Http\Controllers\Plugin;

use App\Http\Controllers\Plugin\Moratab\Agent as MoratabAgent;

class Plugins
{
    public $plugins = [];

    public function __construct()
    {
        $this->plugins["moratab"] = new MoratabAgent();
    }
}

