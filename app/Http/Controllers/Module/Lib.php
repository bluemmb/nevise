<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\CoreLib;
use Illuminate\Support\Facades\DB;

class Lib extends CoreLib
{
    public function selectAll($id)
    {
        $plugins=DB::select('select * from plugins where id in (select plugin_id from modules_plugins where module_id=?)',[$id]);
        return $plugins;
    }
}