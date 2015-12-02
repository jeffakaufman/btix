<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexTeamMapperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_team_mapper', function(Blueprint $table)
		{
			$table->bigInteger('profile_id', true);
			$table->string('opta_team_id', 10)->unique('opta_team_id_UQ');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_team_mapper');
	}

}
