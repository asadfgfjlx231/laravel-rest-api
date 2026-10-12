<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    public $timestamps = true;

    protected $table = 'counties';

    protected $fillable = [
        'mnev',
        'megyecimer'
    ];

    public function cities()
    {
        return $this->hasMany(City::class, 'megyeid');
    }
}