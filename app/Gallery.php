<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Gallery extends Model implements StaplerableInterface
{
    use EloquentTrait;

    protected $fillable = ['name', 'cover'];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('cover', [
            'styles' => [
                'medium' => '750x469'
            ]
        ]);

        parent::__construct($attributes);
    }

    public function places()
    {
        return $this->belongsToMany('App\Place', 'gallery_place');
    }
}
