<?php

use Illuminate\Database\Seeder;

class ModulesPluginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('modules_plugins')->insert([
            'module_id'=>'1',
            'plugin_id'=>'1'
        ]);
        DB::table('modules_plugins')->insert([
            'module_id'=>'1',
            'plugin_id'=>'2'
        ]);
        DB::table('modules_plugins')->insert([
            'module_id'=>'1',
            'plugin_id'=>'3'
        ]);
    }
}
