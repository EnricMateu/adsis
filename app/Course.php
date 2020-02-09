<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CourseCatalog;
use App\User;

class Course extends Model
{

    public $scopeTheory = 'Teoría';
    public $scopePractice = 'Práctica';

    protected $fillable = ['course_id_catalog', 'user_id'];

    public function GetAllCourses(){
        $allCourses = Course::all();
        return $allCourses;
    }

    public function GetCoursesByUserId(int $user_id)
    {
        $Courses = $this->GetAllCourses()->where('user_id', $user_id);
        return $Courses;
    }

    /* public function CourseCatalog()
    {
        return $this->belongsTo(CourseCatalog::class, 'course_id_catalog');
    } */

    public function EvaluationCourseCatalog()
    {
        return $this->hasOneThrough(
            'App\CourseCatalog', 
            'App\Course',
            'id_course_catalog', // Foreign key on Course table...
            'course_id', // Foreign key on CourseCatalog table...
            'id', // Local key on Evaluation table...
            'id_course' // Local key on Course table...
    
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function evaluation()
    {
        return $this->hasOne('App\Evaluation');
    }

    public static function assignMultipleUsers($data)
    {
        $end = count($data);
        $numberOfInputs = 3;
        for ($i = $end; $i >= $numberOfInputs; $i -= $numberOfInputs) {
            $course= new Course;
            $user = new User;
            $course->course_id_catalog = array_shift($data);
            $user->group = array_shift($data);
            $user->id = array_shift($data);
            $course->user_id = $user->id;
            $course= $course->toArray();
            $group=intval($user->group);
            Course::create($course);
            $user->setGroup($group, $user->id);
        }
        return true;
    }
}
