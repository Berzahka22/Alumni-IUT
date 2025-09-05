<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnciensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('anciens', function (Blueprint $table) {
    $table->id(); // crée un big integer auto-increment nommé 'id'
    $table->string('nom');
    $table->date('datenaissance');
    $table->string('lieunaissance');
    $table->string('email')->unique();
    $table->string('telephone')->nullable();
    $table->integer('annee_entree');
   $table->string('photo')->nullable()->change();

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
        Schema::dropIfExists('anciens');
    }
}
