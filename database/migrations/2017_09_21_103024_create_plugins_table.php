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
        Schema::table('plugins', function($table) {
            $table->dropIndex('search');
        });
        Schema::dropIfExists('plugins');
    }
}
