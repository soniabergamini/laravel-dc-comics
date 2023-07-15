<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "type",
        "sale_date"
    ];

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function writers()
    {
        return $this->belongsToMany(Writer::class);
    }
}
