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
            $table->string('prenom');
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
            $table->integer('choix_1')->unsigned();
            $table->integer('choix_2')->unsigned();
            $table->integer('choix_3')->unsigned();
            $table->integer('region_id')->unsigned();
            $table->integer('niveau_id')->unsigned();
            $table->integer('diplome_id')->unsigned();
            $table->integer('paiement_id')->unsigned();
            $table->string('transaction');
            $table->string('sexe');
            $table->foreign('paiement_id')->references('id')->on('payements')->onDelete('cascade');
            $table->foreign('choix_1')->references('id')->on('filieres')->onDelete('cascade');
            $table->foreign('choix_2')->references('id')->on('filieres')->onDelete('cascade');
            $table->foreign('choix_3')->references('id')->on('filieres')->onDelete('cascade');
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
