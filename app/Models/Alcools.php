<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alcools extends Model
{
    use HasFactory;

    protected $table = "alcool";

    protected $fillable = [
        "name",
        "degree",
        "alcool_type_id",
    ];

    public function alcoolsType()
    {
        return $this->belongsTo(AlcoolType::class, "alcool_type_id");
    }

    public function alcoolsName()
    {
        return $this->hasMany(Cocktails::class);
    }
}