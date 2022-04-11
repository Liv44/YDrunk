<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlcoolType extends Model {
    use HasFactory;

    protected $table = "alcool_type";

    protected $fillable = [
        "name"
    ];
}