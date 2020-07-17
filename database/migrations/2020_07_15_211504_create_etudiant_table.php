<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtudiantTable extends Migration {

	public function up()
	{
		
		Schema::create('etudiant', function(Blueprint $table) {
			
			$table->id('numMatricule');
			$table->string('nom', 50);
			$table->string('prenom', 50);
			$table->date('dateDeNaissance');
			$table->string('adresse');
			$table->string('email');
			$table->string('photo');
			// $table->string('idfiliere');
			// $table->increments('idcycle');
			// $table->increments('idannee');
			// $table->increments('idfiliere');
			// $table->increments('idcarte');
			// $table->increments('idniveau');
			// $table->increments('idtuteur');

			// $table->integer('idemail')->length(10)->unsigned();
			// $table->foreign('idemail')->references('idemail')->on('email');
			$table->integer('idcycle')->length(10)->unsigned();
			$table->foreign('idcycle')->references('idcycle')->on('cycle');
			$table->integer('idannee')->length(10)->unsigned();
			$table->foreign('idannee')->references('idannee')->on('annee-academique');
			$table->integer('idfiliere')->length(10)->unsigned();
			$table->foreign('idfiliere')->references('idfiliere')->on('filiere');
			// $table->integer('idcarte')->length(10)->unsigned();
			// $table->foreign('idcarte')->references('idcarte')->on('carte');
			$table->integer('idniveau')->length(10)->unsigned();
			$table->foreign('idniveau')->references('idniveau')->on('niveauetude');
			// $table->integer('idtuteur')->length(10)->unsigned();
			// $table->foreign('idtuteur')->references('idtuteur')->on('tuteur');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('etudiant');
	}
}