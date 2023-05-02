<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'room_id',
        'bookingDate',
        'arrivelDate',
        'departureDate',
        'numbChildren',
        'specialReq'
    ];


      // relationship wit Employees_status (roles)
      public function guest()
      {
          return $this->belongsTo(Guests::class,'guest_id');
      }

    public function getRooms() {

        return $this->belongsTo(Romms::class, 'room_id');

    }
}
