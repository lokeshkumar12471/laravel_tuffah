<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'name',
        'appointment_date',
        'appointment_time',
        'phone',
        'email',
        'gender',
        'age',
        'address',
        'previous_record',
        'previous_record_description'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
