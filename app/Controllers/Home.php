<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('template/index');
    }

    public function hello($nama = 'Saepul')
    {
        return 'Hello Nama Saya Adalah ' . $nama;
    }
}
