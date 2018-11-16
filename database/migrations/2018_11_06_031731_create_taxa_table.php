<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaxaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taxa', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_adm')->nullable()->index('FK_AdmTaxa');
			$table->decimal('taxa_mes', 10, 0);
			$table->date('data_cadastro');
			$table->decimal('taxa_adm', 10, 0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('taxa');
	}

}
