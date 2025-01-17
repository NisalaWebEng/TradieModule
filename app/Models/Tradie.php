<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tradie extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'service', 'description', 'contact', 'rate'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
