<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bills extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'roomCharge',
        'roomService',
        'micsCharge',
        'restaurantCharge',
        'ifLateCheckout',
        'paymentMode',
        'creditCardNo',
        'guest_id',
        'booking_id'
    ];

   public function get_guests()
   {
    return $this->belongsTo(Guests::class , 'guest_id');
   }

    public function bookings() {

        return $this->belongsTo(Bookings::class , 'booking_id');

    }
}
