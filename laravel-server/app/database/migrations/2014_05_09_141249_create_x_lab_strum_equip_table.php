<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXLabStrumEquipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('x_lab_strum_equip', function(Blueprint $table) {
			$table->integer('id_laboratorio');
			$table->integer('id_strumento');
			$table->integer('id_strumento_equip');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('x_lab_strum_equip');
	}

}
