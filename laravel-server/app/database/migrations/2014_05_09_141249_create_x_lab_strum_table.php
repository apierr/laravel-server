<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXLabStrumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('x_lab_strum', function(Blueprint $table) {
			$table->integer('id_laboratorio');
			$table->integer('id_strumento');
			$table->integer('quantita');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('x_lab_strum');
	}

}
