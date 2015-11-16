<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexOptasocPlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_optasoc_player', function(Blueprint $table)
		{
			$table->string('international_caps')->nullable();
			$table->string('international_debut')->nullable();
			$table->string('jersey_number')->nullable();
			$table->string('preferred_foot')->nullable();
			$table->string('real_position')->nullable();
			$table->string('real_position_side')->nullable();
			$table->string('opta_id')->primary();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_optasoc_player');
	}

}
