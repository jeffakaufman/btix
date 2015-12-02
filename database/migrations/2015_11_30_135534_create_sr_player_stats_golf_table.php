<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSrPlayerStatsGolfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sr_player_stats_golf', function(Blueprint $table)
		{
			$table->string('id');
			$table->integer('year');
			$table->integer('cuts')->nullable();
			$table->integer('cuts_made')->nullable();
			$table->float('drive_acc', 10, 0);
			$table->float('drive_avg', 10, 0);
			$table->float('earnings', 10, 0);
			$table->integer('earnings_rank');
			$table->integer('events_played');
			$table->integer('first_place');
			$table->float('gir_pct', 10, 0);
			$table->string('hole_proximity_avg')->nullable();
			$table->float('points', 10, 0);
			$table->float('scoring_avg', 10, 0);
			$table->float('scrambling_pct', 10, 0);
			$table->integer('second_place');
			$table->float('strokes_gained', 10, 0);
			$table->integer('third_place');
			$table->integer('top_10');
			$table->integer('top_25')->nullable();
			$table->integer('withdrawals');
			$table->integer('world_rank');
			$table->primary(['id','year']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sr_player_stats_golf');
	}

}
