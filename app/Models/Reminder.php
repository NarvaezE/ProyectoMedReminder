<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'start_hour',
        'initial_date',
        'final_date',
        'user_id',
        'medicine_id',
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    public function medicines(){
        return $this->belongsToMany('App\Models\Medicine');
    }
}
