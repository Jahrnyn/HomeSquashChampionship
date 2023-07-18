<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'time', 'court', 'opponent', 'user_id', /* 'player3', 'player4', */ 'location'];
}
