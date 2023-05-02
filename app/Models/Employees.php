<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $fillable = [
        'firstName',
        'lastName',
        'gender',
        'address',
        'phone',
        'salary',
        'department_id',
        'employee_status_id',
    ];




    // relationship wit departments
    public function departmentEmployee()
    {
        return $this->belongsTo(Departments::class,'department_id');
    }

     // relationship wit Employees_status (roles)
    public function roleEmployee()
    {
        return $this->belongsTo(positions::class,'employee_status_id');
    }

    public function FallNameEmployee(){

        return $this->firstName . ' ' .$this->lastName;

    }

}
