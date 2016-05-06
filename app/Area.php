<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Area extends Model implements StaplerableInterface
{
    use EloquentTrait;

    protected $fillable = ['name', 'cover'];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('cover', [
            'styles' => [
                'medium' => '460x260'
            ]
        ]);

        parent::__construct($attributes);
    }

    public function places()
    {
        return $this->hasMany('App\Place');
    }
}
