<?php

namespace App\Controllers;

use App\Core\App;

class FoodController{


    public function index()
    {
        $foods = App::get('database')->getAllFood();

        return view('admin/food/index', compact('foods'));
    }

    //API

    public function apiIndex()
    {
        $foods = App::get('database')->getAll('food');
        return json($foods);

    }
    public function apiGetCal(){
        $user=$_SESSION['user'];
        $cal =  App::get('database')->getCall($user);
        return json($cal);
    }



    public function create()
    {
        $food_types= App::get('database')->getAll('food_types');
        return view('admin/food/create',compact('food_types'));
    }

    public function store()
    {

        App::get('database')->insert('food', [
            'food_title' => $_POST['food_title'],
            'food_calories' => $_POST['food_calories'],
            'food_type_id' => $_POST['food_type_id']


        ]);
        return redirect('/admin/food');
    }

    public function edit()
    {

        $food = App::get('database')->find('food', $_GET['id']);
        $food_types= App::get('database')->getAll('food_types');

        return view('admin/food/edit', compact('food','food_types'));
    }


    public function update()
    {

        App::get('database')->update('food', [
            'food_title' => $_POST['food_title'],
            'food_calories' => $_POST['food_calories'],
            'food_type_id' => $_POST['food_type_id']


        ], $_POST['id']);

        return redirect('/admin/food');
    }

    public function delete()
    {

        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

        App::get('database')->delete('food', $id);

        return redirect('/admin/food');

    }
}