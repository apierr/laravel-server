<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXLabAnagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('x_lab_anag', function(Blueprint $table) {
			$table->integer('id_laboratorio');
			$table->integer('id_anagrafica');
			$table->integer('tempo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('x_lab_anag');
	}

}
