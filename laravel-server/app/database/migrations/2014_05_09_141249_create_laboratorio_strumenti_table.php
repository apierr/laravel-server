<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboratorioStrumentiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laboratorio_strumenti', function(Blueprint $table) {
			$table->integer('id_laboratorio')->index('`FK_laboratorio`');
			$table->integer('id_strumento')->index('`FK_strumento_idx`');
			$table->integer('quantita');
			$table->primary(['id_laboratorio','id_strumento']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('laboratorio_strumenti');
	}

}
