<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCycleTable extends Migration {

	public function up()
	{
		Schema::create('cycle', function(Blueprint $table) {
			$table->increments('idcycle',true);
			$table->string('nom');
			$table->integer('numMatricule');
			
			// $table->integer('numMatricule')->length(10)->unsigned();
			// $table->foreign('numMatricule')->references('numMatricule')->on('etudiant');
		});
	}

	public function down()
	{
		Schema::drop('cycle');
	}
}