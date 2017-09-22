<?php

namespace App\Http\Controllers\Plugin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Plugin\Lib as Plugin_Lib;

class Edit extends Controller
{
    public $lib;
    public $validator_conditions;



    function __construct()
    {
        $this->lib=new Plugin_Lib();
        $this->validator_conditions = [
            "title"     => ["required"],
            "type"      => ["required"],
            "content"   => [],
            "searchable"=> []
        ];
    }



    public function insert($pid, $mid)
    {
        $project = $this->lib->getProjectDetails($pid);
        $module  = $this->lib->getModuleDetails($mid);
        return view("plugin.edit" , ["action" => "insert" , "project" => $project , "module" => $module] );
    }

    public function update($pid, $mid, $lid)
    {
        $project = $this->lib->getProjectDetails($pid);
        $module  = $this->lib->getModuleDetails($mid);
        $plugin  = $this->lib->getPluginDetails($lid);
        return view("plugin.edit" , ["action" => "update" , "project" => $project , "module" => $module , "plugin" => $plugin] );
    }

    public function delete($pid, $mid, $lid)
    {
        $project = $this->lib->getProjectDetails($pid);
        $module  = $this->lib->getModuleDetails($mid);
        $plugin  = $this->lib->getPluginDetails($lid);
        return view("plugin.delete" , ["action" => "delete" , "project" => $project , "module" => $module , "plugin" => $plugin] );
    }


    public function handle_insert($pid, $mid)
    {
        $input = request()->input();
        $validator = validator()->make( $input , $this->validator_conditions );

        if ( $validator->passes() ) {
            $this->lib->insert($pid, $mid, $input);
            return redirect("/project/$pid/module/$mid")
                        ->with("message" , "Plugin '{$input["title"]}' added successfuly !");
        }

        return redirect()->back()->withErrors($validator->errors())->withInput();
    }

    public function handle_update($pid, $mid, $lid)
    {
        $input = request()->input();
        $validator = validator()->make( $input , $this->validator_conditions );

        if ( $validator->passes() ) {
            $this->lib->update($pid, $mid, $lid, $input);
            return redirect("/project/$pid/module/$mid")
                ->with("message" , "Plugin '{$input["title"]}' updated successfuly !");
        }

        return redirect()->back()->withErrors($validator->errors())->withInput();
    }

    public function handle_delete($pid, $mid, $lid)
    {
        $input = request()->input();
        $this->lib->delete($pid, $mid, $lid);

        return redirect("/project/$pid/module/$mid")
            ->with("message" , "Plugin '{$input["title"]}' Deleted!");
    }
}
