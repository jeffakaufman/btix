<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTalexOptasocPlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('talex_optasoc_player', function(Blueprint $table)
		{
			$table->foreign('opta_id', 'FK_58fcmm91sp8o2u180e0ygrubk')->references('opta_id')->on('talex_opta_player')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('talex_optasoc_player', function(Blueprint $table)
		{
			$table->dropForeign('FK_58fcmm91sp8o2u180e0ygrubk');
		});
	}

}
