<?php

use Illuminate\Database\Seeder;

class PluginsMetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('plugins_meta')->insert([
            'plugin_id' => '1',
            'key' => 'tag',
            'value' => 'git'
        ]);
        DB::table('plugins_meta')->insert([
            'plugin_id' => '1',
            'key' => 'tag',
            'value' => 'push'
        ]);
        DB::table('plugins_meta')->insert([
            'plugin_id' => '2',
            'key' => 'tag',
            'value' => 'git'
        ]);
        DB::table('plugins_meta')->insert([
            'plugin_id' => '2',
            'key' => 'tag',
            'value' => 'pull'
        ]);
        DB::table('plugins_meta')->insert([
            'plugin_id' => '3',
            'key' => 'tag',
            'value' => 'git'
        ]);
        DB::table('plugins_meta')->insert([
            'plugin_id' => '3',
            'key' => 'tag',
            'value' => 'commit'
        ]);
    }
}
