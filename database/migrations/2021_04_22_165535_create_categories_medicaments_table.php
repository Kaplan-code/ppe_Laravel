<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesMedicamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_medicaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->unsignedBigInteger('medicaments_id');
            $table->foreign('medicaments_id')
                ->references('id')
                ->on('medicaments')
                ->onDelete('cascade');
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
        Schema::dropIfExists('categorie_medicament');
    }
}
