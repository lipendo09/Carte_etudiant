<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiliereTable extends Migration {

	public function up()
	{
		Schema::create('filiere', function(Blueprint $table) {
			$table->increments('idfiliere',true);
			$table->string('nom');
			$table->integer('numMatricule');
			
		});
	}

	public function down()
	{
		Schema::drop('filiere');
	}
}