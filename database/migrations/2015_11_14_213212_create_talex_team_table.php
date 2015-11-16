<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_team', function(Blueprint $table)
		{
			$table->bigInteger('profile_id')->primary();
			$table->string('sport', 40)->nullable();
			$table->string('name', 250)->nullable();
			$table->string('opta_team_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_team');
	}

}
