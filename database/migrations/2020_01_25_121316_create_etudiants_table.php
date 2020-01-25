<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom ');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('langue');
            $table->string('etat_civil');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('nom_pere');
            $table->string('profession_pere');
            $table->string('nom_mere');
            $table->string('profession_mere');
            $table->string('nom_urgence');
            $table->string('tel_urgence');
            $table->string('ville_urgence');
            $table->string('annee_diplome');
            $table->string('exam_nomber');
            $table->string('info_jury');
            $table->float('moyenne')->nullable();
            $table->date('date_delivrence')->nullable();
            $table->string('nombre_papier')->nullable();
            $table->foreign('choix-1')->references('id')->on('filieres')->onDelete('cascade');
            $table->foreign('choix-2')->references('id')->on('filieres')->onDelete('cascade');
            $table->foreign('choix-3')->references('id')->on('filieres')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('cascade');
            $table->foreign('diplome_id')->references('id')->on('diplomes')->onDelete('cascade');


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
        Schema::dropIfExists('etudiants');
    }
}
