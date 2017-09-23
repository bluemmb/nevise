<?php

namespace App\Http\Controllers\Plugin\Moratab;

use App\Http\Controllers\Plugin\PluginLib;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Lib
{
    public function save()
    {
        $id = request()->input( "id" );
        $content = request()->input( "content" );

        DB::update( "update plugins set content=? where id=?" ,
                        [ $content , $id ] );

        return response()->json( [ "result" => "OK!" ] );
    }
}