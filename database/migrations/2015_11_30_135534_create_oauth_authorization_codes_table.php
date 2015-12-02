<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthAuthorizationCodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_authorization_codes', function(Blueprint $table)
		{
			$table->string('authorization_code', 40)->primary();
			$table->string('client_id', 80);
			$table->string('user_id')->nullable();
			$table->string('redirect_uri', 2000)->nullable();
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
		Schema::drop('oauth_authorization_codes');
	}

}
