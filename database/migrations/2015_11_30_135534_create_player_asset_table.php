<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerAssetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_asset', function(Blueprint $table)
		{
			$table->string('sports_radar_id')->primary();
			$table->string('asset_id')->nullable();
			$table->string('rect_img_url')->nullable();
			$table->string('square_img_url')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player_asset');
	}

}
