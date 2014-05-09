<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboratorioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laboratorio', function(Blueprint $table) {
			$table->integer('id_laboratorio', true);
			$table->integer('id_settore')->nullable()->index('`id_settore_idx`');
			$table->integer('id_ente')->unsigned()->nullable()->index('`FK_laboratorio_2`');
			$table->integer('id_afferenza')->unsigned()->nullable()->index('`FK_laboratorio_3`');
			$table->string('nome', 250);
			$table->string('centro', 2)->nullable();
			$table->string('afferenza', 250)->nullable();
			$table->string('facolta', 250)->nullable();
			$table->string('dipartimento', 250)->nullable();
			$table->string('sezione', 250)->nullable();
			$table->string('sede', 250)->nullable();
			$table->string('sede_citta', 250)->nullable();
			$table->decimal('gps_lat', 10, 7)->nullable();
			$table->decimal('gps_lng', 10, 7)->nullable();
			$table->string('ubicazione', 250)->nullable();
			$table->text('descrizione')->nullable();
			$table->string('telefono', 250)->nullable();
			$table->string('web', 250)->nullable();
			$table->text('info')->nullable();
			$table->integer('responsabile')->nullable();
			$table->integer('referente')->nullable();
			$table->integer('attivita_esterna')->nullable();
			$table->string('attivita_esterna_tipol', 250)->nullable();
			$table->integer('regolam_accesso')->nullable();
			$table->string('regolam_accesso_atti', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('laboratorio');
	}

}
