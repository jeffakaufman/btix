<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexCompetitionMapperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_competition_mapper', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('competition_profile_id');
			$table->bigInteger('team_profile_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_competition_mapper');
	}

}
