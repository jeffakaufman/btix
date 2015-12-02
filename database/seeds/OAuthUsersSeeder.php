<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class OAuthUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		DB::table('oauth_users')->delete();
		
		DB::table('oauth_users')->insert(array(
			'username' => "jonlee",
			'password' => sha1("jonlee"),
			'first_name' => "Jon",
			'last_name' => "Lee",
		));
	}
}
