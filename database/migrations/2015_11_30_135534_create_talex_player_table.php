<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexPlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_player', function(Blueprint $table)
		{
			$table->bigInteger('profile_id')->default(0)->primary();
			$table->string('first_name', 100)->nullable();
			$table->string('last_name', 100)->nullable();
			$table->string('height', 5)->nullable();
			$table->integer('weight')->nullable();
			$table->string('birthday', 40)->nullable();
			$table->string('country', 40)->nullable();
			$table->string('residence', 100)->nullable();
			$table->string('birth_place', 100)->nullable();
			$table->string('facebook_id')->nullable();
			$table->dateTime('facebook_verified')->nullable();
			$table->string('twitter_id', 40)->nullable();
			$table->dateTime('twitter_verified')->nullable();
			$table->string('instagram_id', 40)->nullable();
			$table->dateTime('instagram_verified')->nullable();
			$table->string('google_id', 40)->nullable();
			$table->dateTime('google_verified')->nullable();
			$table->integer('member')->nullable();
			$table->integer('display')->nullable();
			$table->dateTime('updated')->nullable();
			$table->string('sport', 40)->nullable();
			$table->string('weight_kg', 11)->nullable();
			$table->string('youtube_id')->nullable();
			$table->dateTime('youtube_verified')->nullable();
			$table->string('sports_radar_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_player');
	}

}
