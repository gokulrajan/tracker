<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model {

	protected $table="timesheets";

	protected $fillable=['cr','username','activity','time_spent'];


	public function users()
	{
		$this->belongsTo('App\User');
	}

	public function projects()
	{
		$this->belongsTo('App\Project');
	}
}
