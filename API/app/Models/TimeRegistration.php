<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeRegistration extends Model{
    // use HasFactory;

    protected $table = 'time_registration';
    protected $primaryKey = 'id';

    protected $fillable = [
        'start',
        'end'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
