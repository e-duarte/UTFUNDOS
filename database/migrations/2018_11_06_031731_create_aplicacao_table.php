<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAplicacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aplicacao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_gestor')->nullable()->index('FK_GesApli');
			$table->integer('id_acao')->nullable()->index('FK_AcaoApli');
			$table->date('data_compra');
			$table->date('data_venda');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aplicacao');
	}

}
