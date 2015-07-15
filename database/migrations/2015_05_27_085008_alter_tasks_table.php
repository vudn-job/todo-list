<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AlterTasksTable extends Migration 
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('tasks', function($table) {
             $table->string('title', 100)->after('id')->nullable();
            $table->text('description')->after('title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('tasks');
    }

}
