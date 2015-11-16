<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTalexOptaPlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('talex_opta_player', function(Blueprint $table)
		{
			$table->foreign('profile_id', 'FK_8cb47smcy0yrhm6cn671swl3')->references('profile_id')->on('talex_mapper')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('talex_opta_player', function(Blueprint $table)
		{
			$table->dropForeign('FK_8cb47smcy0yrhm6cn671swl3');
		});
	}

}
