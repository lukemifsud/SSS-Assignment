<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturers extends Model
{
    use HasFactory;

    //enable mass assignment
    protected $fillable = ['name', 'address','phone'];

    public function cars()
    {
        return $this->hasMany(Cars::class); //manufacturers have many cars
    }
}
