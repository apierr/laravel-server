<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXLabUtilizzatoriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('x_lab_utilizzatori', function(Blueprint $table) {
			$table->integer('id_laboratorio');
			$table->integer('professori');
			$table->integer('ricercatori');
			$table->integer('tecnici');
			$table->integer('assegnisti');
			$table->integer('borsisti');
			$table->integer('laureandi');
			$table->integer('studenti');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('x_lab_utilizzatori');
	}

}
