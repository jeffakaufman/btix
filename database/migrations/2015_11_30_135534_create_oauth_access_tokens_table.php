<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthAccessTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_access_tokens', function(Blueprint $table)
		{
			$table->string('access_token', 40)->primary();
			$table->string('client_id', 80);
			$table->string('user_id')->nullable();
			$table->timestamp('expires')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('scope', 2000)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_access_tokens');
	}

}
