<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNflTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nfl_team', function(Blueprint $table)
		{
			$table->foreign('venue_id', 'nfl_team_ibfk_1')->references('id')->on('nfl_team_venue')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nfl_team', function(Blueprint $table)
		{
			$table->dropForeign('nfl_team_ibfk_1');
		});
	}

}
