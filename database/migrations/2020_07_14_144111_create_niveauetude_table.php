<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNiveauetudeTable extends Migration {

	public function up()
	{
		Schema::create('niveauetude', function(Blueprint $table) {
			$table->increments('idniveau', true);
			$table->string('niveau');
			$table->integer('numMatricule');
			
		});
	}

	public function down()
	{
		Schema::drop('niveauetude');
	}
}