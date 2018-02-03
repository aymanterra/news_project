<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'user_id', 'status_id',
    ];

    // get user who published this comment
	public function user()
    {
        return $this->belongsTo('App\User');
    }

    // get news which this comment related
    public function news()
    {
        return $this->belongsTo('App\News');
    }

    // get status of this comment
    public function status()
    {
        return $this->belongsTo('App\Status');
    }

}
