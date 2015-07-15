<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectIdToTaskTable extends Migration 
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('task', function(Blueprint $table) {
            $table->bigInteger('project_id')->after('status')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('task', function(Blueprint $table) {
            //
        });
    }

}
