<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Romms extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type_id',
        'status'
    ];

    public function roomType()
    {
        return $this->belongsTo(RoomTypes::class , 'room_type_id');
    }
}
