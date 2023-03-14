<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGeographyEnvironment extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
    ];
}
