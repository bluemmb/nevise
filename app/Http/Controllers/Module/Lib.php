<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\CoreLib;
use Illuminate\Support\Facades\DB;

class Lib extends CoreLib
{
    public function selectAll($id)
    {
        $plugins=DB::select('select * from plugins where 
                                id in (select plugin_id from modules_plugins where module_id=?)
                              AND 
                                deleted = FALSE
                             ',[$id]);
        return $plugins;
    }

    public function insert($pid, $input)
    {
        DB::insert( "insert into modules (title, description) values (?,?)" ,
                        [ $input["title"] , $input["description"] ] );

        $mid = DB::getPdo()->lastInsertId();
        DB::insert( "insert into projects_modules (project_id, module_id) values (?,?)" ,
                        [ $pid , $mid ] );

        return true;
    }

    public function update($pid, $mid, $input)
    {
        DB::update( "update modules set title=?,description=? where id=?" ,
                        [ $input["title"] , $input["description"] , $mid ] );
        return true;
    }

    public function delete($pid, $mid)
    {
        DB::insert( "delete from projects_modules where project_id=? and module_id=?" ,
                        [ $pid , $mid ] );
        return true;
    }
}