<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCycleTable extends Migration {

	public function up()
	{
		Schema::create('cycle', function(Blueprint $table) {
			$table->increments('idcycle',true);
			$table->string('nom');
			
			
		});
	}

	public function down()
	{
		Schema::drop('cycle');
	}
}