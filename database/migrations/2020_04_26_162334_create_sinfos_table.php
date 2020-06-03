<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinfos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('s_name');
            $table->string('s_add');
            $table->string('s_prof');
            $table->integer('s_pass');
            $table->string('s_img')->nullable();
            $table->integer('s_num');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinfos');
    }
}
