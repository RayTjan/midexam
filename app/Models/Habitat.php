<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'type',
        'description',
    ];

    
    public function hasAnimals(){
        return $this->hasMany(Animal::class,'habitat','id');
    }
}
