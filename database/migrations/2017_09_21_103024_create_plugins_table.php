<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePluginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plugins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->mediumText('content');
            $table->mediumText('searchable');
            $table->timestamps();
        });
        DB::statement('alter table plugins add fulltext search(searchable)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('plugins')) {

            Schema::table('plugins', function($table) {
                $fulltexts = DB::select( DB::raw('SHOW KEYS FROM plugins WHERE Index_type="FULLTEXT"') );
                foreach ($fulltexts as $fulltext)
                    $table->dropIndex($fulltext->Key_name);
            });

            Schema::dropIfExists('plugins');
        }
    }
}
