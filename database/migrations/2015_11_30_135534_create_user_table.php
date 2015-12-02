<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->bigInteger('user_id', true);
			$table->string('email', 256)->unique('email');
			$table->string('username', 256)->nullable()->unique('username');
			$table->string('password', 256)->nullable();
			$table->dateTime('password_change')->nullable()->default('CURRENT_TIMESTAMP(6)');
			$table->string('firstname', 256);
			$table->string('lastname', 256);
			$table->string('company', 256)->nullable();
			$table->boolean('enabled', 1)->default('b'1'');
			$table->dateTime('created')->nullable()->default('CURRENT_TIMESTAMP(6)');
			$table->string('notes', 256)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
