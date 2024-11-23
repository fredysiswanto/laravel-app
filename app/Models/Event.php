<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'location',
        'start_time',
        'end_time',
        'max_participants',
        'created_by',
        'img_banner',
        'price',
        'img_banner'
    ];
}
