<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboratorioTecniciTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laboratorio_tecnici', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_laboratorio')->index('`FK_laboratorio_tecnici_1`');
			$table->string('nome', 45);
			$table->string('cognome', 45);
			$table->string('matricola', 20)->nullable();
			$table->string('descrizione', 200)->nullable();
			$table->string('note', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('laboratorio_tecnici');
	}

}
