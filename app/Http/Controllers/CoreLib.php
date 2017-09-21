<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CoreLib
{
    public function getProjectDetails($id)
    {
        $project_details = DB::select( "select * from projects where id = ? limit 1" , [ $id ] );

        if ( count( $project_details ) == 0 )
            return null;

        return $project_details[0];
    }
}
