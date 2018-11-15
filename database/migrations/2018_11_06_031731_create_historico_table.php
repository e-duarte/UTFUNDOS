<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoricoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historico', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_acao')->nullable()->index('FK_AcaoHist');
			$table->date('data');
			$table->decimal('valor', 10, 0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historico');
	}

}
