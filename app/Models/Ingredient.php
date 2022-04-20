<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $table = "ingredient";

    protected $fillable = [
        "cocktail_id",
        "ingredient_type",
        "ingredient_id",
        "quantity",
    ];

    public function ingredientName()
    {  
        switch($this->ingredient_type){
            case "fruits": return $this->belongsTo(Fruit::class, "ingredient_id");
            case "alcools": return $this->belongsTo(Alcools::class, "ingredient_id");
            case "softs": return $this->belongsTo(Soft::class, "ingredient_id");
            case "sirops": return $this->belongsTo(Sirop::class, "ingredient_id");
        }
    }
}
