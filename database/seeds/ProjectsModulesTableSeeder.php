<?php

use Illuminate\Database\Seeder;

class ProjectsModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects_modules')->insert([
            'project_id'=>'1',
            'module_id'=>'1'
        ]);
        DB::table('projects_modules')->insert([
            'project_id'=>'2',
            'module_id'=>'2'
        ]);
        DB::table('projects_modules')->insert([
            'project_id'=>'3',
            'module_id'=>'3'
        ]);
    }
}
