<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsAndTachesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom')->default('');
			$table->date('dateFinProj');
			$table->text('commentaireProjet');
			$table->timestamps();
		});

		Schema::create('taches', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('projet_id')->unsigned()->default(0);
			$table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
			$table->string('nom')->default('');
			$table->date('dateFinTache');
			$table->boolean('termine')->default(false);
			$table->text('description')->default('');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('taches');
		Schema::drop('projets');
	}
}
