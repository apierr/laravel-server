<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboratorioHasAfferenzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laboratorio_has_afferenza', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_laboratorio')->index('`FK_laboratorio_has_afferenza_1`');
			$table->integer('id_afferenza')->unsigned()->index('`FK_laboratorio_has_afferenza_2`');
			$table->string('nome', 200)->nullable();
			$table->string('descrizione', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('laboratorio_has_afferenza');
	}

}
