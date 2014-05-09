<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStrumentilabTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('strumentilab', function(Blueprint $table) {
			$table->integer('id_strumento', true);
			$table->integer('id_laboratorio')->nullable()->index('`FK_strumentilab_1`');
			$table->string('tipologia', 250)->nullable();
			$table->string('marca', 250)->nullable();
			$table->string('modello', 250)->nullable();
			$table->integer('equipaggiamento')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('strumentilab');
	}

}
