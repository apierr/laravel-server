<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipologiaStrumentiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipologia_strumenti', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome', 100);
			$table->string('descrizione', 200)->nullable();
			$table->string('note', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipologia_strumenti');
	}

}
