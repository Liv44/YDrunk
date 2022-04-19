<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    protected $table = "fruits";

    protected $fillable = [
        "name",
        "imagePath"
    ];

    public function fruitName()
    {
        return $this->hasMany(Cocktails::class);
    }

    
}
