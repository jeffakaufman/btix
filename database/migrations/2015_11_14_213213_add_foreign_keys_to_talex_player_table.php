<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTalexPlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('talex_player', function(Blueprint $table)
		{
			$table->foreign('profile_id', 'talex_player_ibfk_1')->references('profile_id')->on('talex_mapper')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('talex_player', function(Blueprint $table)
		{
			$table->dropForeign('talex_player_ibfk_1');
		});
	}

}
