<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLaboratorioHasAfferenzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('laboratorio_has_afferenza', function(Blueprint $table) {
			$table->foreign('id_afferenza')->references('id')->on('afferenza');
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
		Schema::table('laboratorio_has_afferenza', function(Blueprint $table) {
			$table->dropForeign('laboratorio_has_afferenza_id_afferenza_foreign');
			$table->dropForeign('laboratorio_has_afferenza_id_laboratorio_foreign');
		});
	}

}
