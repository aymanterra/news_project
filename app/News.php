<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'sub_title', 'body', 'status_id',
    ];

    // get comments related to this news
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    // get user who published this news
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // get status of this news
    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    // get all approved news
    public static function approved()
    {
    	return static::where('status_id', '=', '2')->get();
    }

    // get all approved comments for certain news
    public function approvedComments()
    {
    	return $this->comments()->where('status_id', '=', '2')->get();
    }

}
