<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        return parent::render('personal', ['menu' => 'create']);
    }
}
