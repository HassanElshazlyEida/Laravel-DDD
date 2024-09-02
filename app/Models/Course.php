<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description'
    ];
    public function students(){
        return $this->belongsToMany(Student::class,'course_student','course_id','student_id');
    }
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
}
