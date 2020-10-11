<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEleveGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleve_groupes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('eleve_id')->unsigned();
            $table->bigInteger('groupe_id')->unsigned();
            $table->timestamps();
            $table->foreign('eleve_id')->references('id')->on('eleve')->onDelete('cascade');
            $table->foreign('groupe_id')->references('id')->on('groupe')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleve_groupe');
    }
}
