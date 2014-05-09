<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXLabServStrumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('x_lab_serv_strum', function(Blueprint $table) {
			$table->integer('id_laboratorio');
			$table->integer('id_strumento');
			$table->integer('id_servizio');
			$table->string('tipologia', 200)->default('effettuato');
			$table->text('motivazione');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('x_lab_serv_strum');
	}

}
