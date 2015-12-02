<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerSocialStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_social_stats', function(Blueprint $table)
		{
			$table->bigInteger('profile_id');
			$table->string('facebook_id')->nullable();
			$table->integer('likes')->nullable();
			$table->integer('talking_about_count')->nullable();
			$table->integer('twitter_followers')->nullable();
			$table->string('twitter_id')->nullable();
			$table->integer('twitter_listed')->nullable();
			$table->integer('google_followers')->unsigned()->nullable()->default(0);
			$table->string('google_id')->nullable();
			$table->string('google_views')->nullable();
			$table->string('youtube_id')->nullable();
			$table->integer('youtube_subscribers')->nullable();
			$table->integer('instagram_followers')->nullable();
			$table->string('instagram_id')->nullable();
			$table->dateTime('event_time')->default('CURRENT_TIMESTAMP(6)');
			$table->string('sports_radar_id')->nullable()->default('');
			$table->binary('player_social_statpk')->nullable();
			$table->bigInteger('shadow_profile_id')->nullable();
			$table->primary(['profile_id','event_time']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player_social_stats');
	}

}
