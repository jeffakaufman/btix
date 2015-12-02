<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNflTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nfl_team', function(Blueprint $table)
		{
			$table->string('id', 40)->default('')->primary();
			$table->string('name', 40)->nullable();
			$table->string('market', 40)->nullable();
			$table->string('division', 40)->nullable();
			$table->string('conference', 40)->nullable();
			$table->string('league', 40)->nullable();
			$table->string('venue_id', 40)->nullable()->index('venue_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nfl_team');
	}

}
