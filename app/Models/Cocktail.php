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
        "glassID"
    ];

    public function alcoolsType()
    {
        // return $this->belongsTo(AlcoolType::class, "alcool_type_id");
    }
}
