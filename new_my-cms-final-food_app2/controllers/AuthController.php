<?php

namespace App\Controllers;


use App\Core\App;

class AuthController
{
    public function showLoginForm()
    {
        return view('auth/login-form');
    }


    public function authenticateUser()
    {

        $user = App::get('database')->authenticate($_POST['email'], md5($_POST['password']));
        if(!$user) {
            return redirect('/login');
        }

        $_SESSION['user'] = $user;
        if($user->role_id == 1) {
            return redirect('/admin/home');
        }
        return redirect('/');
    }

    public function logout()
    {
        unset($_SESSION['user']);
        return redirect('/login');
    }

    public function showRegister(){
        return view('auth/register');
    }



    public function register()
    {


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


        ]);
//                dd($query->debugDumpParams());
        return redirect('/login');
    }
}