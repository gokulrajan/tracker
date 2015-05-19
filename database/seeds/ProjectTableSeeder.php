<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Project;
use App\User;

class ProjectTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

		$users=User::all()->lists('name');
       		
	        foreach(range(1,30) as $index)  
	        {  
	            	Project::create([  
	                'cr' => $faker->randomNumber(5),
	                'name' => $faker->word,  
	                'product' => $faker->word,
	                'actual_start_date' =>$faker->date('Y-m-d'),
	                'actual_end_date'=>$faker->date('Y-m-d'), 
	                'start_date'=>$faker->date('Y-m-d'),  
	                'end_date'=>$faker->date('Y-m-d'),  
	                'pdef'=>$faker->name,  
	                'dev'=>$faker->name,  
	                'qa' =>$faker->randomElement($users),
	                'test_plan_status'=>'started',  
	                'validation_status'=>'started',  
	                'scripting_status'=>'started',
	                'overall_status'=>'In Progress'
	                
	               
	            ]);  
	        }

		// $this->call('UserTableSeeder');
	}

}