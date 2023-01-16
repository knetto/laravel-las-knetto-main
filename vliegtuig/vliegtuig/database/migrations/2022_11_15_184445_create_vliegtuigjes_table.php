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
        Schema::create('vliegtuigjes', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->integer('stoelen');
            $table->string('maatschappij');
            $table->string('type');
            $table->string('piloot');
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
        Schema::dropIfExists('vliegtuigjes');
    }
};
