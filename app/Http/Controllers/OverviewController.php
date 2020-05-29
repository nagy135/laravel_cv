<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverviewController extends CreateController
{
    public function index(){
        return parent::render('overview', []);
    }
}
