<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoccerPlayerStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('soccer_player_stats', function(Blueprint $table)
		{
			$table->string('sports_radar_id');
			$table->string('category', 50)->default('');
			$table->integer('goal_frequency')->nullable();
			$table->decimal('goal_average', 14, 4)->nullable();
			$table->integer('goal_assists')->nullable();
			$table->integer('matches_played')->nullable();
			$table->integer('matches_started')->nullable();
			$table->integer('minutes_played')->nullable();
			$table->integer('yellow_cards')->nullable();
			$table->integer('substitutions_out')->nullable();
			$table->integer('substitutions_in')->nullable();
			$table->integer('red_cards')->nullable();
			$table->string('tournament_group')->default('');
			$table->string('tournament')->nullable();
			$table->integer('year');
			$table->string('team_name')->default('');
			$table->integer('yellow_red_cards');
			$table->string('country')->nullable();
			$table->string('country_code')->nullable();
			$table->integer('goals');
			$table->primary(['sports_radar_id','year','category','tournament_group']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('soccer_player_stats');
	}

}
