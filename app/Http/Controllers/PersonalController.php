<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalData;
use Auth;

class PersonalController extends CreateController
{
    public function index(){
        return parent::render('personal', ['menu' => 'create']);
    }
    public function nextStep(Request $request){
        $data = $request->all();
        $userId = Auth::user()->id;
        $born_at = date('Y-m-d', strtotime($data['date_of_birth']));
        PersonalData::create([
            'gender' => $data['gender'],
            'degree' => $data['degree'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'born_at' => $born_at,
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'user_id' => $userId,
        ]);
        return parent::performNextStep($request, 1, 'education');
    }
}
