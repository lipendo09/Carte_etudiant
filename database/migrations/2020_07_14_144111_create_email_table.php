<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailTable extends Migration {

	public function up()
	{
		Schema::create('email', function(Blueprint $table) {
			$table->increments('idemail', true);
			$table->string('email');
			
		});
		
	}

	public function down()
	{
		Schema::drop('email');
	}
}