<?php

namespace App\Controllers;


use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->getAll('users');

        return view('admin/users/index', compact('users'));
    }

    //API

    public function apiIndex()
    {
        $user = App::get('database')->getAll('users');
        return json($user);
    }


    public function create()
    {

        return view('admin/users/create');
    }

    public function store()
    {
//        dd($_POST['date_of_birth']);
        App::get('database')->insert('users', [
            'username' => $_POST['username'],
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'date_of_birth' => $_POST['date_of_birth'],
            'height' => $_POST['height'],
            'weight' => $_POST['weight'],
            'city' => $_POST['city'],
            'occupation' => $_POST['occupation'],
            'type_of_food' => $_POST['type_of_food'],
            'goal' => $_POST['goal'],
            'activity' => $_POST['activity'],
            'avatar' => $_POST['avatar'],
            'gender' => $_POST['gender'],
            'role_id'=>$_POST['role_id']

        ]);
//                dd($query->debugDumpParams());
        return redirect('/admin/users');
    }

    public function edit()
    {

        $user = App::get('database')->find('users', $_GET['id']);


        return view('admin/users/edit', compact('user'));
    }


    public function update()
    {

        App::get('database')->update('users', [
            'username' => $_POST['username'],
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'password' =>  md5($_POST['password']),
            'date_of_birth' => $_POST['date_of_birth'],
            'height' => $_POST['height'],
            'weight' => $_POST['weight'],
            'city' => $_POST['city'],
            'occupation' => $_POST['occupation'],
            'type_of_food' => $_POST['type_of_food'],
            'goal' => $_POST['goal'],
            'activity' => $_POST['activity'],
            'gender' => $_POST['gender'],
            'role_id'=>$_POST['role_id']

        ], $_POST['id']);

        return redirect('/admin/users');
    }

    public function delete()
    {
        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

        App::get('database')->delete('users', $id);

        return redirect('/admin/users');

    }
    public function me(){
        return json($_SESSION['user']);
    }
}