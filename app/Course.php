<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CourseCatalog;
use App\User;

class Course extends Model
{

    public $scopeTheory = 'Teoría';
    public $scopePractice = 'Práctica';

    protected $fillable = ['course_catalog_id', 'user_id'];

    public function GetAllCourses()
    {
        $allCourses = Course::all();
        return $allCourses;
    }

    public function GetCoursesByUserId(int $user_id)
    {
        $Courses = $this->GetAllCourses()->where('user_id', $user_id);
        return $Courses;
    }

    public function courseCatalog()
    {
        return $this->belongsTo(CourseCatalog::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function assignMultipleUsers($data)
    {
        $end = count($data);
        $numberOfInputs = 3;
        for ($i = $end; $i >= $numberOfInputs; $i -= $numberOfInputs) {
            $course= new Course;
            $user = new User;
            $course->course_catalog_id = array_shift($data);
            $user->group = array_shift($data);
            $user->id = array_shift($data);
            $course->user_id = $user->id;
            $course= $course->toArray();
            $group=intval($user->group);
            Course::create($course);
            $user->setGroup($group, $user->id);
        }
    }

}
