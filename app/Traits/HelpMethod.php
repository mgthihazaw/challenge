<?php 

namespace App\Traits;

trait HelpMethod{
    protected function setPageTitle($title)
    {
        view()->share(['title' => $title]);
    }
}