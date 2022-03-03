<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'image',
        'create_at',
        'latitude',
        'longitude',
        'description'
    ];
    public function user() {
        return $this->belongsTo(User::class);    

    }
}
