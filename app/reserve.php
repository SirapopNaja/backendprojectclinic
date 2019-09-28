<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reserve extends Model
{
    //
    protected $table = 'reserve';
    protected $fillable = [
        'fist_name',
        'last_name',
        'reserve_at',
    ];
}
