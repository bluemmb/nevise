<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\CoreLib;
use Illuminate\Support\Facades\DB;

class Lib extends CoreLib
{
    public function selectAll($id)
    {
        $modules=DB::select('select * from modules where 
                                 id in (select module_id from projects_modules where project_id=?) 
                               AND 
                                 deleted = FALSE
                            ',[$id]);
        return $modules;
    }

    public function insert($input)
    {
        DB::insert( "insert into projects (title) values (?)" , [ $input["title"] ] );
        return true;
    }

    public function update($id, $input)
    {
        DB::update( "update projects set title=? where id=?" , [ $input["title"] , $id ] );
        return true;
    }

    public function delete($id)
    {
        DB::update( "update projects set deleted=? where id=?"
                            , [ true , $id ] );
        return true;
    }
}