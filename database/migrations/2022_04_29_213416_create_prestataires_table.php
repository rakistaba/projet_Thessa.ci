<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestataires', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prest');
            $table->string('prenom_prest');
            $table->string('contact_prest');
            $table->string('metier_prest');
            $table->string('langue_prest');
            $table->string('ville_prest');
            $table->string('email_prest');
            $table->char('password_prest');
            $table->string('sexe_prest')->nullable();
            $table->integer('age_prest');
            $table->string('imagePath');
            $table->softDeletes();
            $table->string('domaine_prest');
           $table->mediumText('description_prest');
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
        Schema::dropIfExists('prestataires');
    }
}
