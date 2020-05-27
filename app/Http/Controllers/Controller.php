<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function render($template, $contextData=[], $mergeData=[]) {
        if (! array_key_exists('menu', $contextData)) $contextData['menu'] = 'home';
        return view(
            $template,
            $contextData,
            $mergeData
        );
    }
}
