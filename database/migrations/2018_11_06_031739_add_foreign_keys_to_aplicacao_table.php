<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAplicacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('aplicacao', function(Blueprint $table)
		{
			$table->foreign('id_gestor', 'FK_GesApli')->references('id')->on('investidor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_acao', 'FK_AcaoApli')->references('id')->on('investidor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('aplicacao', function(Blueprint $table)
		{
			$table->dropForeign('FK_GesApli');
			$table->dropForeign('FK_AcaoApli');
		});
	}

}
