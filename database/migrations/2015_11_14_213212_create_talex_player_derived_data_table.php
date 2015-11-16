<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexPlayerDerivedDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_player_derived_data', function(Blueprint $table)
		{
			$table->string('profile_id')->primary();
			$table->integer('current_likes')->nullable();
			$table->integer('current_youtube_fans')->nullable();
			$table->integer('current_google_fans')->nullable();
			$table->integer('current_twitter_followers')->nullable();
			$table->integer('current_instagram_fans')->nullable();
			$table->integer('youtube_new_fans180d')->nullable();
			$table->integer('youtube_new_fans1d')->nullable();
			$table->integer('youtube_new_fans30d')->nullable();
			$table->integer('youtube_new_fans7d')->nullable();
			$table->integer('youtube_new_fans90d')->nullable();
			$table->float('youtube_new_fansper180d', 10, 0)->nullable();
			$table->float('youtube_new_fansper1d', 10, 0)->nullable();
			$table->float('youtube_new_fansper30d', 10, 0)->nullable();
			$table->float('youtube_new_fansper7d', 10, 0)->nullable();
			$table->integer('youtube_new_fansper90d')->nullable();
			$table->integer('twitter_new_fans180d')->nullable();
			$table->integer('twitter_new_fans1d')->nullable();
			$table->integer('twitter_new_fans30d')->nullable();
			$table->integer('twitter_new_fans7d')->nullable();
			$table->integer('twitter_new_fans90d')->nullable();
			$table->float('twitter_new_fansper180d', 10, 0)->nullable();
			$table->float('twitter_new_fansper1d', 10, 0)->nullable();
			$table->float('twitter_new_fansper30d', 10, 0)->nullable();
			$table->float('twitter_new_fansper7d', 10, 0)->nullable();
			$table->float('twitter_new_fansper90d', 10, 0)->nullable();
			$table->integer('instagram_new_fans180d')->nullable();
			$table->integer('instagram_new_fans1d')->nullable();
			$table->integer('instagram_new_fans30d')->nullable();
			$table->integer('instagram_new_fans7d')->nullable();
			$table->integer('instagram_new_fans90d')->nullable();
			$table->float('instagram_new_fansper180d', 10, 0)->nullable();
			$table->float('instagram_new_fansper1d', 10, 0)->nullable();
			$table->float('instagram_new_fansper30d', 10, 0)->nullable();
			$table->float('instagram_new_fansper7d', 10, 0)->nullable();
			$table->float('instagram_new_fansper90d', 10, 0)->nullable();
			$table->integer('facebook_new_fans180d')->nullable();
			$table->integer('facebook_new_fans1d')->nullable();
			$table->integer('facebook_new_fans30d')->nullable();
			$table->integer('facebook_new_fans7d')->nullable();
			$table->integer('facebook_new_fans90d')->nullable();
			$table->float('facebook_new_fansper180d', 10, 0)->nullable();
			$table->float('facebook_new_fansper1d', 10, 0)->nullable();
			$table->float('facebook_new_fansper30d', 10, 0)->nullable();
			$table->float('facebook_new_fansper7d', 10, 0)->nullable();
			$table->float('facebook_new_fansper90d', 10, 0)->nullable();
			$table->integer('google_new_fans180d')->nullable();
			$table->integer('google_new_fans1d')->nullable();
			$table->integer('google_new_fans30d')->nullable();
			$table->integer('google_new_fans7d')->nullable();
			$table->integer('google_new_fans90d')->nullable();
			$table->float('google_new_fansper180d', 10, 0)->nullable();
			$table->float('google_new_fansper1d', 10, 0)->nullable();
			$table->float('google_new_fansper30d', 10, 0)->nullable();
			$table->float('google_new_fansper7d', 10, 0)->nullable();
			$table->float('google_new_fansper90d', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_player_derived_data');
	}

}
