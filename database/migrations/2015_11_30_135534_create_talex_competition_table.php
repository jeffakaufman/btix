<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexCompetitionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_competition', function(Blueprint $table)
		{
			$table->bigInteger('profile_id', true);
			$table->string('sport', 40)->nullable();
			$table->string('name', 250)->nullable();
			$table->integer('opta_competition_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_competition');
	}

}
