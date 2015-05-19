<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $fillable=['cr','name','product','actual_start_date',
	'actual_end_date','start_date',
	'end_date','test_plan_status','scripting_status',
	'validation_status','overall_status','pdef','dev','qa'];


	public function owner()
	{
		return $this->belongsTo('App\User','qa');
	}



}
