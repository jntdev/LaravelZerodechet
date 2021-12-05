<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event_images;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'city',
        'address',
        'time',
        'endTime',
        'date',
        'description',
        'has_equipment',
        'child_authorized',
        'has_toilets',
        'event_picture',
        'list_equipment',
        'user_id',
        'nb_max_user',

    ];
    protected $dates =['date'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function event_image(){
        return $this->hasOne(Event_image::class);
    }
    public function registrations(){
        return $this->hasMany(Registration::class);
    }

}
