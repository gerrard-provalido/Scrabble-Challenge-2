<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pl_results', function (Blueprint $table) {
            $table->increments('result_id');
            $table->integer('result_member_id');
            $table->string('result_match_status');
            $table->integer('result_match_id');
            $table->integer('result_score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pl_results');
    }
}
