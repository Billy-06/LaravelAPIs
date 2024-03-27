<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    // allow mass assignement on the below fields.
    protected $fillable = [
        'title', 'description', 'category', 'author', 'signees'
    ];
}
