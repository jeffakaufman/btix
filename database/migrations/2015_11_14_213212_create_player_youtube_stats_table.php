<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerYoutubeStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_youtube_stats', function(Blueprint $table)
		{
			$table->dateTime('event_time');
			$table->string('profile_id');
			$table->integer('new_fans180d');
			$table->integer('new_fans1d');
			$table->integer('new_fans30d');
			$table->integer('new_fans7d');
			$table->integer('new_fans90d');
			$table->float('new_fansper180d', 10, 0);
			$table->float('new_fansper1d', 10, 0);
			$table->float('new_fansper30d', 10, 0);
			$table->float('new_fansper7d', 10, 0);
			$table->float('new_fansper90d', 10, 0);
			$table->string('youtube_id')->nullable();
			$table->primary(['event_time','profile_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player_youtube_stats');
	}

}
