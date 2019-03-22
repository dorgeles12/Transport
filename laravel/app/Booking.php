<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'days',
        'user_id',
        'company_id',
    ];
    // Relations
    public function users(){
        return $this->belongsToMany('App\User');
    }
    public function companies(){
        return $this->belongsTo('App\Company');
    }
}
