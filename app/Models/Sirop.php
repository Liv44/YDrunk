<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sirop extends Model
{
    use HasFactory;

    protected $table = "sirop";

    protected $fillable = [
        "name"
    ];

    public function siropName()
    {
        return $this->hasMany(Cocktails::class);
    }
}