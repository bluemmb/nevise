<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'title' => "Nevise"
        ]);

        DB::table('projects')->insert([
            'title' => "Sama"
        ]);

        DB::table('projects')->insert([
            'title' => "Visual Studio Code ++"
        ]);
    }
}
