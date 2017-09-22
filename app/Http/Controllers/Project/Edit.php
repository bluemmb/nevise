<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Project\Lib as Project_Lib;

class Edit extends Controller
{
    public $lib;
    public $validator_conditions;



    function __construct()
    {
        $this->lib=new Project_Lib();
        $this->validator_conditions = [
            "title"    => ["required"]
        ];
    }



    public function insert()
    {
        return view("project.edit" , ["action" => "insert"] );
    }

    public function update($id)
    {
        $project = $this->lib->getProjectDetails($id);
        return view("project.edit" , ["action" => "update" , "project" => $project] );
    }

    public function delete($id)
    {
        $project = $this->lib->getProjectDetails($id);
        return view("project.delete" , ["action" => "delete" , "project" => $project] );
    }


    public function handle_insert()
    {
        $input = request()->input();
        $validator = validator()->make( $input , $this->validator_conditions );

        if ( $validator->passes() ) {
            $this->lib->insert($input);
            return redirect("dashboard")
                        ->with("message" , "Project '{$input["title"]}' added successfuly !");
        }

        return redirect()->back()->withErrors($validator->errors())->withInput();
    }

    public function handle_update($id)
    {
        $input = request()->input();
        $validator = validator()->make( $input , $this->validator_conditions );

        if ( $validator->passes() ) {
            $this->lib->update($id,$input);
            return redirect("dashboard")
                ->with("message" , "Project '{$input["title"]}' updated successfuly !");
        }

        return redirect()->back()->withErrors($validator->errors())->withInput();
    }

    public function handle_delete($id)
    {
        $input = request()->input();
        $this->lib->delete($id);

        return redirect("dashboard")
            ->with("message" , "Project '{$input["title"]}' Deleted!");
    }
}