<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'city',
        'location',
        'date',
        'duration',
        'description',
        'materiel',
        'child',
        'WC',
        'listmateriel'
    ];
}
