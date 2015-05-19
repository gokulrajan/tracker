<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

       		
	        foreach(range(1,30) as $index)  
	        {  
	            	User::create([  
	                'name' => str_replace('.', '_', $faker->unique()->userName),  
	                'email' => $faker->email,  
	                'password' => 'password' 
	               
	            ]);  
	        }

		// $this->call('UserTableSeeder');
	}

}