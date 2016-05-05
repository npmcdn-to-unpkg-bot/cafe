<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Post extends Model implements StaplerableInterface
{
    use EloquentTrait;
    
    protected $fillable = [
        'title', 'summary', 'body', 'user_id', 'cover'
    ];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('cover', [
            'styles' => [
                'medium' => '300x300',
                'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
