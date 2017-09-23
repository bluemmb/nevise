<?php

namespace App\Http\Controllers\Plugin;

use App\Http\Controllers\CoreLib;
use Illuminate\Support\Facades\DB;

class Lib extends CoreLib
{
    public function insert($pid, $mid, $input)
    {
        DB::insert( "insert into plugins (title, type, content, searchable) values (?,?,?,?)" ,
                        [ $input["title"] , $input["type"] , $input["content"] , $input["searchable"] ] );

        $lid = DB::getPdo()->lastInsertId();
        DB::insert( "insert into modules_plugins (module_id, plugin_id) values (?,?)" ,
                        [ $mid , $lid ] );

        return true;
    }

    public function update($pid, $mid, $lid, $input)
    {
        DB::update( "update plugins set title=?,type=?,content=?,searchable=? where id=?" ,
                        [ $input["title"] , $input["type"] , $input["content"] , $input["searchable"] , $lid ] );
        return true;
    }

    public function delete($pid, $mid, $lid)
    {
        DB::insert( "delete from modules_plugins where module_id=? and plugin_id=?" ,
                        [ $mid , $lid ] );
        return true;
    }





    public function editor($pid , $mid , $lid)
    {
        $plugins = new Plugins();

        $project = $this->getProjectDetails($pid);
        $module = $this->getProjectDetails($mid);
        $plugin  = $this->getPluginDetails($lid);
        return $plugins->plugins[ $plugin->type ]->Editor( $project , $module , $plugin );
    }
}