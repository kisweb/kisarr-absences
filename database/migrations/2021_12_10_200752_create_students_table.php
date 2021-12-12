<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classeroom_id')->constrained();
            $table->string('prenoms');
            $table->string('nom');
            $table->string('dateNaissance');
            $table->string('lieuNaissance');
            $table->enum('sexe', ['M','F']);
            $table->string('matricule')->nullable();
            $table->string('photo')->default('default.jpg');
            $table->string('provenance')->nullable();
            $table->string('pere')->nullable();
            $table->string('mere')->nullable();
            $table->string('tuteur')->nullable();
            $table->string('contact')->nullable();
            $table->string('adresse')->nullable();
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
        Schema::dropIfExists('students');
    }
}
