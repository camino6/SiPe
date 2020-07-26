<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scrapping extends Model
{

    /**
     * The table name.
     */
    protected $table = 'scrapping';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand', 'model', 'zone', 'notes'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
