<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cr')->unique()->index();
			$table->string('name');
			$table->string('product');
			$table->date('start_date');
			$table->date('end_date');
			$table->date('actual_start_date');
			$table->date('actual_end_date');
			$table->string('test_plan_status');
			$table->string('scripting_status');
			$table->string('validation_status');
			$table->string('overall_status');
			$table->string('dev');
			$table->string('pdef');
			$table->string('qa');
			$table->foreign('qa')->references('name')->on('users');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
