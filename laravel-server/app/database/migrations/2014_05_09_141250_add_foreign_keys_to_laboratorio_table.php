<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLaboratorioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('laboratorio', function(Blueprint $table) {
			$table->foreign('id_settore')->references('id_settore')->on('settore');
			$table->foreign('id_ente')->references('id')->on('ente');
			$table->foreign('id_afferenza')->references('id')->on('afferenza');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('laboratorio', function(Blueprint $table) {
			$table->dropForeign('laboratorio_id_settore_foreign');
			$table->dropForeign('laboratorio_id_ente_foreign');
			$table->dropForeign('laboratorio_id_afferenza_foreign');
		});
	}

}
