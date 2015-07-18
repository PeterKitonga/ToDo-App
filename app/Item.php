<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	protected $fillable = [
		 'item_name',
		 'done',
		 'date_created',
		 
	];

	protected $dates = ['date_created'];

	public function setDateCreatedAttribute($date)
	{
		$this->attributes['date_created'] = Carbon::createFromFormat('Y-m-d', $date);
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
