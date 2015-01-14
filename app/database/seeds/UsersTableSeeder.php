<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
			'name'	=> 'Ngô Việt',
			'email' => 'ngoducvietds@gmail.com',
			'username' => 'admin',
			'password' => Hash::make('123456')
		));
	}

}