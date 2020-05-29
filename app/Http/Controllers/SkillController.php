<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends CreateController
{
    public function index(){
        return parent::render('skill', ['menu' => 'create']);
    }
}
