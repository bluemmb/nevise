<?php

use Illuminate\Database\Seeder;

class PluginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('plugins')->insert([
            'title'=>'Learn Git Push',
            'type'=>'moratab'
        ]);
        DB::table('plugins')->insert([
            'title'=>'Learn Git Pull',
            'type'=>'moratab'
        ]);
        DB::table('plugins')->insert([
            'title'=>'Learn Git Commit',
            'type'=>'moratab'
        ]);
    }
}
