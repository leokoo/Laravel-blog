<?php

namespace App;
use Carbon\Carbon;

class Post extends Model
{
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
    	$this->comments()->create(compact('body'));
  		// 	Comment::create([
				// 'body' => request('body'),
				// 'post_id' => $this->id
				// ]);
    }

    // https://laravel.com/docs/5.0/eloquent#query-scopes
    public function scopeFilter($query, $filters)
	{
		if ($month = $filters['month']) {
			// whereMonth compares created_at to $month (compares column value against date)
			$query->whereMonth('created_at', Carbon::parse($month)->month);
		}

		if ($year = $filters['year']) {
			// whereMonth compares created_at to $month (compares column value against date)
			$query->whereYear('created_at', $year);
		}
	}
}
