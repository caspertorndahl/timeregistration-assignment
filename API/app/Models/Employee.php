<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model{
    // use HasFactory;

    protected $table = 'employee';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'work_hours_per_week'
    ];

    public function timeRegistrationList(){
        return $this->hasMany(TimeRegistration::class);
    }
}
