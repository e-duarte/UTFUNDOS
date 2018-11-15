<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaxaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('taxa', function(Blueprint $table)
		{
			$table->foreign('id_adm', 'FK_AdmTaxa')->references('id')->on('investidor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('taxa', function(Blueprint $table)
		{
			$table->dropForeign('FK_AdmTaxa');
		});
	}

}
