<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'student_id', 'tel', 'login', 'specialty' ,'created_at'
    ];
}
