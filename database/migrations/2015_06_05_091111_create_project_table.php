<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration 
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('project', function(Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('project_name', 100)->nullable();
            $table->text('description')->nullable();
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
        Schema::drop('project');
    }

}
