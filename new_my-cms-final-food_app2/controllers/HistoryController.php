<?php


namespace App\Controllers;

use App\Core\App;

class HistoryController
{

    public function index()
    {
        $history_lists = App::get('database')->getAllHistory();

        return view('admin/history/index', compact('history_lists'));
    }

    //API

    public function apiIndex()
    {
        $users = App::get('database')->getAll('history');
        return json($users);
    }



    public function create()
    {
        $users= App::get('database')->getAll('users');
        $foods = App::get('database')->getAll('food');
        return view('admin/history/create',compact('users', 'foods'));
    }

    public function store()
    {

        App::get('database')->insert('history', [
            'user_id' => $_POST['user_id'],
            'food_id' => $_POST['food_id'],
            'date' => $_POST['date']


        ]);

        return redirect('/admin/history');
    }

    public function edit()
    {

        $historyE = App::get('database')->find('history', $_GET['id']);
        $users= App::get('database')->getAll('users');
        $foods = App::get('database')->getAll('food');

        return view('admin/history/edit', compact('historyE','users', 'foods'));
    }


    public function update()
    {

        App::get('database')->update('history', [
            'user_id' => $_POST['user_id'],
            'food_id' => $_POST['food_id'],
            'date' => $_POST['date']


        ], $_POST['id']);

        return redirect('/admin/history');
    }

    public function delete()
    {

        $id = (int) $_GET['id'];

        if(! is_int($id)) return;

        App::get('database')->delete('history', $id);

        return redirect('/admin/history');

    }
}