<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptaSocplayerStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opta_socplayer_stats', function(Blueprint $table)
		{
			$table->string('opta_id');
			$table->string('season');
			$table->string('team_name');
			$table->string('career')->nullable();
			$table->string('competition')->nullable();
			$table->integer('games_played');
			$table->integer('goals');
			$table->dateTime('last_updated')->nullable();
			$table->integer('red_cards');
			$table->integer('yellow_cards');
			$table->primary(['opta_id','season','team_name']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('opta_socplayer_stats');
	}

}
