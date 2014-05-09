<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStrumentilabTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('strumentilab', function(Blueprint $table) {
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
		Schema::table('strumentilab', function(Blueprint $table) {
			$table->dropForeign('strumentilab_id_laboratorio_foreign');
		});
	}

}
