<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;
    protected $table = "cocktail";

    protected $fillable = [
        "name",
        "glass_id"
    ];

    public function glassType()
    {
        return $this->belongsTo(Glass::class, "glass_id");
    }
}
