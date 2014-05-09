<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLaboratorioStrumentiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('laboratorio_strumenti', function(Blueprint $table) {
			$table->foreign('id_laboratorio')->references('id_laboratorio')->on('laboratorio');
			$table->foreign('id_strumento')->references('id_strumento')->on('strumenti');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('laboratorio_strumenti', function(Blueprint $table) {
			$table->dropForeign('laboratorio_strumenti_id_laboratorio_foreign');
			$table->dropForeign('laboratorio_strumenti_id_strumento_foreign');
		});
	}

}
