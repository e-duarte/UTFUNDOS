<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvestimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('investimento', function(Blueprint $table)
		{
			$table->foreign('investidor_id', 'FK_Investidor')->references('id')->on('investidor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('investimento', function(Blueprint $table)
		{
			$table->dropForeign('FK_Investidor');
		});
	}

}
