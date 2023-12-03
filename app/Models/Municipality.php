<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $table = "municipality";
    protected $fillable = [
        'psgcCode',
        'citymunDesc',
        'regCode',
        'provCode',
        'citymunCode'
    ];
}