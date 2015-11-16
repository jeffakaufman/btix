<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexMapperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_mapper', function(Blueprint $table)
		{
			$table->bigInteger('profile_id', true);
			$table->string('sports_radar_id')->nullable();
			$table->string('opta_id')->nullable();
			$table->bigInteger('team_profile_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_mapper');
	}

}
