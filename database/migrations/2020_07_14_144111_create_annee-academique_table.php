<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnneeAcademiqueTable extends Migration {

	public function up()
	{
		Schema::create('annee-academique', function(Blueprint $table) {
			$table->increments('idannee');
			$table->string('annee');
			
		});
	}

	public function down()
	{
		Schema::drop('annee-academique');
	}
}