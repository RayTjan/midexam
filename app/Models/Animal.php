<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'family',
        'diet',
        'quantity',
        'caretaker',
        'habitat',
        'description',
        'arrival_date',
        'image',
    ];
    public function takenCareBy(){
        return $this->belongsTo(User::class, 'caretaker','id');
    }
    public function isIn(){
        return $this->belongsTo(Habitat::class,'habitat','id');
    }

}
