<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alcool', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('degree');
            $table->unsignedBigInteger('alcool_type_id')->nullable();
            $table->foreign('alcool_type_id')->references('id')->on('alcool_type');
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
        Schema::dropIfExists('alcool');
    }
};