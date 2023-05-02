<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomTypes extends Model
{
    use HasFactory;
    protected $table = "room_types";
    protected $fillable = [
        'RoomPrice',
        'DefaultRoomPrice',
        'RoomImage',
        'RoomDesc'
    ];
}
