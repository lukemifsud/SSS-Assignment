<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    //enable mass assignment
    protected $fillable = ['model','year','salesperson_email','manufacturers_id'];
    
    public function manufacturers()
    {
        return $this->belongsTo(Manufacturers::class); //multiple cars belong to one manufacturer
    }
}
