<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_tell',

    ];
}
