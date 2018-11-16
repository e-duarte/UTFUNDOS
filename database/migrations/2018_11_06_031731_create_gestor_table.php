<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGestorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gestor', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 40);
			$table->decimal('limite', 10, 0);
			$table->decimal('meta', 10, 0);
			$table->string('email', 40);
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
		Schema::drop('gestor');
	}

}
