<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic_name',
        'title',
        'pdf_file_path',
    ];
}
