<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends CreateController
{
    public function index(Request $request){
        parent::checkIfCorrectStep($request, 2);
        return parent::render('experience', ['menu' => 'create']);
    }
    public function nextStep(Request $request){
        return parent::performNextStep($request, 3, 'experience');
    }
}
