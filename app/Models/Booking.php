<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id', 'exam_id', 'status'];
    
    public function user() { 
        return $this->belongsTo(User::class); 
    }

    public function exam() { 
        return $this->belongsTo(Exam::class); 
    }

    public function result() { 
        return $this->hasOne(Result::class); 
    }
}
