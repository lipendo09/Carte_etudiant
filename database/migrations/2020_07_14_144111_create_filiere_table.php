<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiliereTable extends Migration {

	public function up()
	{
		Schema::create('filiere', function(Blueprint $table) {
			$table->increments('idfiliere',true);
			$table->string('nom');
			
		});
	}

	public function down()
	{
		Schema::drop('filiere');
	}
}