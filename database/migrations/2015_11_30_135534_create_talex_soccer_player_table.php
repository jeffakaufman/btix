<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexSoccerPlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_soccer_player', function(Blueprint $table)
		{
			$table->bigInteger('profile_id')->default(0)->primary();
			$table->string('preferred_foot', 10)->nullable();
			$table->integer('jersey_number')->nullable();
			$table->string('position', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_soccer_player');
	}

}
