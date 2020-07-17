<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarteTable extends Migration {

	public function up()
	{
		Schema::create('carte', function(Blueprint $table) {
			$table->increments('idcarte', true);
			$table->integer('numeroCarte');
		});
	}

	public function down()
	{
		Schema::drop('carte');
	}
}