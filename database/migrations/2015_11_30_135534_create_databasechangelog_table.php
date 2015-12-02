<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatabasechangelogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('databasechangelog', function(Blueprint $table)
		{
			$table->string('ID');
			$table->string('AUTHOR');
			$table->string('FILENAME');
			$table->dateTime('DATEEXECUTED');
			$table->integer('ORDEREXECUTED');
			$table->string('EXECTYPE', 10);
			$table->string('MD5SUM', 35)->nullable();
			$table->string('DESCRIPTION')->nullable();
			$table->string('COMMENTS')->nullable();
			$table->string('TAG')->nullable();
			$table->string('LIQUIBASE', 20)->nullable();
			$table->string('CONTEXTS')->nullable();
			$table->string('LABELS')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('databasechangelog');
	}

}
