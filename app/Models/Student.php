<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'country','city', 'street','created_at'];

    public function student_info()
    {
        return $this->hasOne(StudentInfo::class);
    }
}
