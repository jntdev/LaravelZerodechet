<?php

namespace App\Models;

use App\Models\Events_image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Events_image extends Model
{
    use HasFactory;
    public function event(){
        return $this->belongsTo(Events_image::class);
    }
}
