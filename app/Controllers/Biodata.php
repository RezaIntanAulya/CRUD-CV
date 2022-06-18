<?php

namespace App\Controllers;

class Biodata extends BaseController
{
    function index()
    {
        $data['title']    = "Biodata-Reza";
        return view('vw_form', $data);
    }
}