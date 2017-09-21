<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('modules')->insert([
            'title' => 'Git'
        ]);
        DB::table('modules')->insert([
            'title' => 'Bash'
        ]);
        DB::table('modules')->insert([
            'title' => 'Grub'
        ]);
        DB::table('modules')->insert([
            'title' => 'Laravel'
        ]);
        DB::table('modules')->insert([
            'title' => 'MVC'
        ]);
    }
}
