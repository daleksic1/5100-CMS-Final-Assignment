<?php
/**
 * Created by PhpStorm.
 * User: Web Server
 * Date: 7/6/2017
 * Time: 4:38 PM
 */

namespace App\Controllers;


use App\Core\App;

class CategoriesController
{
    public function index()
    {
        $categories = App::get('database')->getAll('categories');

        return view('categories/index', compact('categories'));
    }

    public function create()
    {
           $categories = App::get('database')->getAll('categories');

        return view('categories/create', compact( 'categories'));
    }

    public function store()
    {
        App::get('database')->insert('categories', [
            'title' => $_POST['title']
        ]);

        return redirect('/categories');
    }

    public function edit()
    {

        $category= App::get('database')->find('categories', $_GET['id']);

        return view('categories/edit', compact('category'));
    }


    public function update()
    {
        App::get('database')->update('categories', [
            'title' => $_POST['title']
        ], $_POST['id']);

        return redirect('/categories');
    }

    public function delete()
    {
        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

        App::get('database')->delete('categories', $id);

        return redirect('/categories');

    }
}