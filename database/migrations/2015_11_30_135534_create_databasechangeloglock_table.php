<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatabasechangeloglockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('databasechangeloglock', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->boolean('LOCKED', 1);
			$table->dateTime('LOCKGRANTED')->nullable();
			$table->string('LOCKEDBY')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('databasechangeloglock');
	}

}
