<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXLabAreaMiurTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('x_lab_area_miur', function(Blueprint $table) {
			$table->integer('id_laboratorio');
			$table->integer('id_area');
			$table->integer('id_settore');
			$table->integer('miur_area');
			$table->string('ssd', 15);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('x_lab_area_miur');
	}

}
