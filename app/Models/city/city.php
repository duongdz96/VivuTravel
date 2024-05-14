<?php

namespace App\Models\city;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $table = "cities";
    protected $fillable = [
        "name",
        "price",
        "image",
        "num_days",
        "country_id"
    ];

    public $timestamps = true;
}
