<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexFavouritesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_favourites', function(Blueprint $table)
		{
			$table->bigInteger('favourite_id', true);
			$table->bigInteger('user_id')->index('user_id_fk_idx');
			$table->bigInteger('player_id')->nullable();
			$table->bigInteger('team_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_favourites');
	}

}
