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
    ];
}