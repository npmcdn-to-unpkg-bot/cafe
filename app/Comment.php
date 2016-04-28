<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body', 'commentable_id', 'commentable_type', 'user_id',
    ];

    /**
     * Get all of the owning commentable models.
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    /**
     * Get owner user of this comment.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
