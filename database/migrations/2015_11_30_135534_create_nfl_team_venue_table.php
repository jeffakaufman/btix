<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNflTeamVenueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nfl_team_venue', function(Blueprint $table)
		{
			$table->string('id', 40)->default('')->primary();
			$table->string('name', 40)->nullable();
			$table->string('city', 40)->nullable();
			$table->string('state', 40)->nullable();
			$table->integer('capacity')->nullable();
			$table->string('surface', 40)->nullable();
			$table->string('type', 40)->nullable();
			$table->string('zip', 40)->nullable();
			$table->string('address', 40)->nullable();
			$table->string('country', 40)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nfl_team_venue');
	}

}
