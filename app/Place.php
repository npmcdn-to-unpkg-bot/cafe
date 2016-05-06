<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Place extends Model implements StaplerableInterface
{
    use EloquentTrait;
    use \Conner\Likeable\LikeableTrait;

    protected $fillable = [
        'name', 'description', 'space_point', 'service_point', 'quality_point', 'address_point', 'price_point', 'address', 'phone_number', 'open_time', 'close_time', 'start_price', 'end_price', 'longitude', 'latitude', 'character', 'review', 'cover',
    ];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('cover');
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

    public function galleries()
    {
        return $this->belongsToMany('App\Gallery', 'gallery_place');
    }
}
