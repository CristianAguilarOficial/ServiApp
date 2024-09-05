<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login/iniciarCuenta');
    }

    public function passwordNew(): string
    {
        return view('login/newpassword');
    }
}
