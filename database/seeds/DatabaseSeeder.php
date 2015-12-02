<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        User::create([                
			'name' => "Jeff Kaufman",
			'password' => bcrypt('test'),
			'email' => "info@kaufmaninternational.com"
            ]);

        Model::reguard();
    }
}
