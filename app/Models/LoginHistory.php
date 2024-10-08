<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginHistory extends Model
{
    use HasFactory;

    protected $table = 'login_history';

    protected $fillable = [
        'user_id',
        'login_at',
        'logout_at',
        'name',
    ];

    // Tentukan kolom yang berupa timestamp
    public $timestamps = true;

    // Relasi dengan user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
