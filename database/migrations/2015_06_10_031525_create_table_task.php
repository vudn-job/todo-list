<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTask extends Migration 
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('task', function(Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('task_name', 100)->nullable();
            $table->timestamp('dead_line')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->smallInteger('status')->default(1)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('task');
    }

}
