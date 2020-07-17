<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTuteurTable extends Migration {

	public function up()
	{
		Schema::create('tuteur', function(Blueprint $table) {
			$table->increments('idtuteur');
			$table->string('nom');
			$table->string('prenom');
			$table->integer('numTele');
		});
	}

	public function down()
	{
		Schema::drop('tuteur');
	}
}