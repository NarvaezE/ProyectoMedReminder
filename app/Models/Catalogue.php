<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
    ];

    public function medicines(){
        return $this->belongsToMany('App\Models\Medicine');
    }
}
