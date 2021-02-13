<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = ['author', 'title', 'summary'];
    use HasFactory;
}
