<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(ProjectsModulesTableSeeder::class);
        $this->call(PluginsTableSeeder::class);
        $this->call(ModulesPluginsTableSeeder::class);
        $this->call(PluginsMetaTableSeeder::class);
    }
}
