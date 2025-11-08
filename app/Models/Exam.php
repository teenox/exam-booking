<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = ['name', 'description', 'exam_date', 'exam_time', 'pass_score'];

    public function bookings() { 
        return $this->hasMany(Booking::class); 
    }
}
