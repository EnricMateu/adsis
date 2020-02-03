<?php

namespace App\Observers;

use App\Evaluation;
use App\Event;
use App\Review;

class EvaluationObserver
{
    
    public function created(Evaluation $evaluation)
    {

       $newEventT = new Event();
       $newEventT->createEventTypeEvaluationTheory($evaluation);
       $newEventP = new Event();
       $newEventP->createEventTypeEvaluationPractice($evaluation);
       $reviewT = new Review();

       

    }

    
    public function updated(Evaluation $evaluation)
    {
        //
    }

    
    public function deleted(Evaluation $evaluation)
    {
        //
    }

    
    public function restored(Evaluation $evaluation)
    {
        //
    }

   
    public function forceDeleted(Evaluation $evaluation)
    {
        //
    }
}
