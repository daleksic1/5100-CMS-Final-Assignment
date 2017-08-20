<?php

namespace App\Controllers;


use App\Core\App;

class AdminHomeController
{
    public function index()
    {
        $users = App::get('database')->getAll('users');

        return view('admin/home/index', compact('users'));
    }
}