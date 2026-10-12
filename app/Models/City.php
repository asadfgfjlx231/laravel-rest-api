<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * Ebben a projektben nem használunk timestamp mezőket.
     */
    public $timestamps = false;

    /**
     * Tömegesen kitölthető mezők.
     */
    protected $fillable = [
        'vnev',
        'megyeid',
        'nepesseg',
        'iranyitoszam'
    ];

    /**
     * Egy város egy megyéhez tartozik.
     */
    public function county()
    {
        return $this->belongsTo(County::class, 'megyeid', 'id');
    }
}