<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends CreateController
{
    public function index(){
        return parent::render('personal', ['menu' => 'create']);
    }
    public function nextStep(Request $request){
        return parent::performNextStep($request, 1, 'education');
    }
}
