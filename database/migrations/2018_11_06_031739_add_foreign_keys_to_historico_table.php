<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHistoricoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('historico', function(Blueprint $table)
		{
			$table->foreign('id_acao', 'FK_AcaoHist')->references('id')->on('investidor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('historico', function(Blueprint $table)
		{
			$table->dropForeign('FK_AcaoHist');
		});
	}

}
