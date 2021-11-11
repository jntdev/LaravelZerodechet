<?php

namespace App\Models;

use App\Models\User;
use App\Models\Events_image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class event extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'city',
        'adress',
        'date',
        'duration',
        'description',
        'has_equipment',
        'child_authorized',
        'has_toilets',
        'list_equipment',
        'user_id',
        
        
        
    ];
    protected $dates =['date'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function event_image(){
        return $this->hasOne(Events_image::class);
    }
}
