<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['datetime', 'court', 'user_id', 'opponent', 'location'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function opponentUser()
    {
        return $this->belongsTo(User::class, 'opponent', 'username');
    }
}
