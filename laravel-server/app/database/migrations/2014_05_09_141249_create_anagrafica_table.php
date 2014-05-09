<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnagraficaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anagrafica', function(Blueprint $table) {
			$table->string('id_anagrafica', 11);
			$table->string('cognome', 250);
			$table->string('nome', 250)->nullable();
			$table->string('email', 250)->nullable();
			$table->string('telefono1', 250)->nullable();
			$table->string('telefono2', 250)->nullable();
			$table->string('qualifica', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('anagrafica');
	}

}
