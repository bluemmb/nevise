<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\CoreLib;
use Illuminate\Support\Facades\DB;

class Lib extends CoreLib
{
    public function selectAll($id)
    {
        $modules=DB::select('select * from modules where id in (select module_id from projects_modules where project_id=?)',[$id]);
        return $modules;
    }
}