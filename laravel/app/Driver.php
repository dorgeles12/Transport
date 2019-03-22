<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'email',
        'phone',
        //'picture',
        'address',
        'company_id',
    ];
    // Relations
    public function companies(){
        return $this->belongsTo('App\Company');
    }
}
