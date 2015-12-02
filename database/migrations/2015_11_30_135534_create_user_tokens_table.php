<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_tokens', function(Blueprint $table)
		{
			$table->string('username', 256);
			$table->string('series', 128)->default('')->primary();
			$table->string('token', 128)->nullable();
			$table->dateTime('last_used')->default('CURRENT_TIMESTAMP(6)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_tokens');
	}

}
