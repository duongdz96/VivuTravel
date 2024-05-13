<?php

namespace App\Models\city;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $table = "cities";
    protected $fillables = [
        "name",
        "image",
        "price",
        "num_date",
        "description",
        "country_id"
    ];

    public $timestamps = true;
}
