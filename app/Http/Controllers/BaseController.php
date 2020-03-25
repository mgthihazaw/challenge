<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected function setPageTitle($title)
    {
        view()->share(['title' => $title]);
    }
}
