<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeedesssr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		DB::table('users')->delete();
		
		DB::table('users')->insert(array(
			'name' => "Jeff Kaufman",
			'password' => bcrypt('test'),
			'email' => "info@kaufmaninternational.com",
		));
	}
}
