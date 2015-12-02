<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_clients', function(Blueprint $table)
		{
			$table->string('client_id', 80)->primary();
			$table->string('client_secret', 80);
			$table->string('redirect_uri', 2000);
			$table->string('grant_types', 80)->nullable();
			$table->string('scope', 100)->nullable();
			$table->string('user_id', 80)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_clients');
	}

}
