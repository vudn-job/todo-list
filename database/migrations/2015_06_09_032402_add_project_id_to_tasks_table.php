<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectIdToTasksTable extends Migration 
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('tasks', function(Blueprint $table) {
            $table->bigInteger('project_id')->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('tasks', function(Blueprint $table) {
            //
        });
    }

}
