<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudiKasus extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name', 'company', 'description', ];

}
