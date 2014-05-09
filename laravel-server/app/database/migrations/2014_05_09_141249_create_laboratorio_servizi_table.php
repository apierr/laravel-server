<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboratorioServiziTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laboratorio_servizi', function(Blueprint $table) {
			$table->integer('id_servizi', true);
			$table->integer('id_laboratorio')->index('`FK_laboratorio_servizi_1`');
			$table->string('nome', 200);
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
		Schema::drop('laboratorio_servizi');
	}

}
