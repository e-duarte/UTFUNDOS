<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdministradorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administrador', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 40);
			$table->string('senha', 20);
			$table->string('email', 30);
			$table->string('login', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('administrador');
	}

}
