<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guests extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
            'First_name',
            'Last_name',
            'gender',
            'phone',
            'email',
            'passwors',
            'passPortNo',
            'address',
            'city',
            'conutry',
            'number_of_person',
            'age'
    ];


    public function FallNameGuests() {

        return $this->First_name . ' ' .$this->Last_name;

    }
}
