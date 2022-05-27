<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestataireUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestataire_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('prestataire_id') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('prestataire_user');
    }
}
