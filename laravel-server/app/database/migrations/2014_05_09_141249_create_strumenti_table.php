<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStrumentiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('strumenti', function(Blueprint $table) {
			$table->integer('id_strumento', true);
			$table->string('tipologia', 250)->nullable();
			$table->string('marca', 250)->nullable();
			$table->string('modello', 250)->nullable();
			$table->integer('equipaggiamento');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('strumenti');
	}

}
