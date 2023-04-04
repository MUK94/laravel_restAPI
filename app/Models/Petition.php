<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    // Dealing with mass assignment
    protected $fillable = ['title', 'description', 'category', 'author', 'signees']; // Used for small field mass assignment
    // protected $guarded; // Large field mass assigment
}
