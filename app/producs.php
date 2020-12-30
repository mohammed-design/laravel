<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class producs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category',
        'image'
    ];
}
