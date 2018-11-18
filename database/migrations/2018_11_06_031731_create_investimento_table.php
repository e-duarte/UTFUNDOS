<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvestimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('investimento', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('investidor_id')->nullable()->index('FK_Investidor');
			$table->decimal('valor_investido', 10, 0);
			$table->date('prazo');
			$table->date('data_deposito');
			$table->date('data_saque');
			$table->decimal('taxa_mes', 10, 0);
			$table->decimal('taxa_adm', 10, 0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('investimento');
	}

}
