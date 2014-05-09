<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXLabStrumFuturiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('x_lab_strum_futuri', function(Blueprint $table) {
			$table->integer('id_laboratorio');
			$table->string('tipologia', 250);
			$table->integer('quantita');
			$table->string('finalita');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('x_lab_strum_futuri');
	}

}
