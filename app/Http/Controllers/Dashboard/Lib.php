<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\CoreLib;
use Illuminate\Support\Facades\DB;

class Lib extends CoreLib
{
    public function selectAll()
    {
        $projects = DB::select( "select * from projects" );
        return $projects;
    }
}