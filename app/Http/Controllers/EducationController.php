<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends CreateController
{
    public function index(Request $request){
        parent::checkIfCorrectStep($request, 1);
        return parent::render('education', ['menu' => 'create']);
    }
    public function nextStep(Request $request){
        return parent::performNextStep($request, 2, 'experience');
    }
}
