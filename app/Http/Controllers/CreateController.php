<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    protected function performNextStep(Request $request, $nextStep, $redirectRoute){
        $currentStep = $request->session()->get('steps_done', 0);
        if ($nextStep - $currentStep > 1){
            abort(404);
        }
        $request->session()->put('steps_done', $nextStep);
        return redirect()->route($redirectRoute);
    }
    protected function checkIfCorrectStep(Request $request, $neededStepsDone){
        if ( $request->session()->get('steps_done', 0) < $neededStepsDone){
            abort(404);
        }
    }
}
