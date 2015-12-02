<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndexCalcParamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('index_calc_params', function(Blueprint $table)
		{
			$table->string('sport', 20)->default('');
			$table->string('param_name', 100)->default('');
			$table->float('param_value', 10, 0)->nullable();
			$table->primary(['sport','param_name']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('index_calc_params');
	}

}
