<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexOptaPlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_opta_player', function(Blueprint $table)
		{
			$table->string('opta_id')->primary();
			$table->string('birth_place')->nullable();
			$table->string('birthday')->nullable();
			$table->string('country')->nullable();
			$table->integer('display');
			$table->string('facebook_id')->nullable();
			$table->string('first_name')->nullable();
			$table->string('google_id')->nullable();
			$table->string('height')->nullable();
			$table->string('instagram_id')->nullable();
			$table->string('known_name')->nullable();
			$table->string('last_name')->nullable();
			$table->integer('member');
			$table->string('name')->nullable();
			$table->string('residence')->nullable();
			$table->string('sport')->nullable();
			$table->string('twitter_id')->nullable();
			$table->dateTime('updated')->nullable();
			$table->integer('weight')->nullable();
			$table->string('youtube_id')->nullable();
			$table->bigInteger('profile_id')->nullable()->index('FK_8cb47smcy0yrhm6cn671swl3');
			$table->string('name_alias')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_opta_player');
	}

}
