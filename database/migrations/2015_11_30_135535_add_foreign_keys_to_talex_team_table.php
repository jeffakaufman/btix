<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTalexTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('talex_team', function(Blueprint $table)
		{
			$table->foreign('profile_id', 'profile_id_FK')->references('profile_id')->on('talex_team_mapper')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('talex_team', function(Blueprint $table)
		{
			$table->dropForeign('profile_id_FK');
		});
	}

}
