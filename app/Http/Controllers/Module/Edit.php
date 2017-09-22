<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Module\Lib as Module_Lib;

class Edit extends Controller
{
    public $lib;
    public $validator_conditions;



    function __construct()
    {
        $this->lib=new Module_Lib();
        $this->validator_conditions = [
            "title"    => ["required"],
            "description" => []
        ];
    }



    public function insert($pid)
    {
        $project = $this->lib->getProjectDetails($pid);
        return view("module.edit" , ["action" => "insert" , "project" => $project] );
    }

    public function update($pid, $mid)
    {
        $project = $this->lib->getProjectDetails($pid);
        $module  = $this->lib->getModuleDetails($mid);
        return view("module.edit" , ["action" => "update" , "project" => $project , "module" => $module] );
    }

    public function delete($pid, $mid)
    {
        $project = $this->lib->getProjectDetails($pid);
        $module  = $this->lib->getModuleDetails($mid);
        return view("module.delete" , ["action" => "delete" , "project" => $project , "module" => $module] );
    }


    public function handle_insert($pid)
    {
        $input = request()->input();
        $validator = validator()->make( $input , $this->validator_conditions );

        if ( $validator->passes() ) {
            $this->lib->insert($pid, $input);
            return redirect("/project/$pid")
                        ->with("message" , "Module '{$input["title"]}' added successfuly !");
        }

        return redirect()->back()->withErrors($validator->errors())->withInput();
    }

    public function handle_update($pid, $mid)
    {
        $input = request()->input();
        $validator = validator()->make( $input , $this->validator_conditions );

        if ( $validator->passes() ) {
            $this->lib->update($pid, $mid, $input);
            return redirect("/project/$pid")
                ->with("message" , "Module '{$input["title"]}' updated successfuly !");
        }

        return redirect()->back()->withErrors($validator->errors())->withInput();
    }

    public function handle_delete($pid, $mid)
    {
        $input = request()->input();
        $this->lib->delete($pid, $mid);

        return redirect("/project/$pid")
            ->with("message" , "Module '{$input["title"]}' Deleted!");
    }
}
