<?php

namespace App\Http\Controllers;

use http\Exception\UnexpectedValueException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Evaluation;
use App\Course;


class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getAllData()
    {
        $user = Auth::user();

        $evaluations = $this->getEvaluations($user->id);
        $courses = $this->getCourses($user->id);

        $allEvents = $evaluations->union($courses);
        $sortedEvents = $this->SortTimeLineEvents($allEvents);



        return view('home',['user'=> $user, 'sortedEvents'=> $sortedEvents]);
    }

    public  function getEvaluations($userId)
    {
        $evaluations = new Evaluation();
        $evaluationByUser = $evaluations->GetEvaluationByUserId($userId);
        return $evaluationByUser;
    }

    public  function getCourses($userId)
    {
        $courses = new Course();
        $coursesByUser = $courses->GetCoursesByUserId($userId);
        return $coursesByUser;

    }

    public function SortTimeLineEvents ($timeLineEvents)

    {

       $sortedEvents = $timeLineEvents->sortBy('created_at');

           return $sortedEvents;
    }
}
