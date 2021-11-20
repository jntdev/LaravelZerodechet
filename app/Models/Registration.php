<?php

namespace App\Models;
use App\Models\User;
use App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable =[
        'nb_players',
        'user_id',
        'event_id',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
    public function events(){
        return $this->hasMany(Event::class);
    }

}

