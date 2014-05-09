<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLaboratorioTecniciTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('laboratorio_tecnici', function(Blueprint $table) {
			$table->foreign('id_laboratorio')->references('id_laboratorio')->on('laboratorio');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('laboratorio_tecnici', function(Blueprint $table) {
			$table->dropForeign('laboratorio_tecnici_id_laboratorio_foreign');
		});
	}

}
