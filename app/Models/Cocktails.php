<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktails extends Model
{
    use HasFactory;

    protected $table = "cocktails";

    protected $fillable = [
        "name",
        "alcool_id",
        "fruits_id",
        "sirop_id",
        "softs_id"
    ];

    public function alcoolCocktail()
    {
        return $this->belongsTo(Alcools::class, "alcool_id");
    }

    public function fruitCocktail()
    {
        return $this->belongsTo(Fruit::class, "fruits_id");
    }
    public function siropCocktail()
    {
        return $this->belongsTo(Sirop::class, "sirop_id");
    }
    public function softCocktail()
    {
        return $this->belongsTo(Soft::class, "softs_id");
    }

}
