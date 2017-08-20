<?php
$router->get('login', 'AuthController@showLoginForm');
$router->post('login', 'AuthController@authenticateUser');

$router->get('logout', 'AuthController@logout');
$router->get('register','AuthController@showRegister');

$router->post('register','AuthController@register');

$router->get('', 'PagesController@home', true);

$router->get('posts', 'PostsController@index', true);
$router->get('posts/create', 'PostsController@create');
$router->post('posts', 'PostsController@store');
$router->get('posts/edit', 'PostsController@edit');
$router->post('posts/update', 'PostsController@update');
$router->get('posts/delete', 'PostsController@delete');



$router->get('categories', 'CategoriesController@index');
$router->get('categories/create', 'CategoriesController@create');
$router->post('categories', 'CategoriesController@store');
$router->get('categories/edit', 'CategoriesController@edit');
$router->post('categories/update', 'CategoriesController@update');
$router->get('categories/delete', 'CategoriesController@delete');


$router->get('users', 'UsersController@index', true);

//Admin

//Admin/Home
$router->get('admin/home', 'AdminHomeController@index', true);




//Admin/Users
$router->get('admin/users', 'UsersController@index', true);
$router->get('admin/users/create', 'UsersController@create', true);
$router->post('admin/users', 'UsersController@store', true);
$router->get('admin/users/edit', 'UsersController@edit', true);
$router->post('admin/users/update', 'UsersController@update', true);
$router->get('admin/users/delete', 'UsersController@delete', true);

//Admin/food
$router->get('admin/food', 'FoodController@index', true);
$router->get('admin/food/create', 'FoodController@create', true);
$router->post('admin/food', 'FoodController@store', true);
$router->get('admin/food/edit', 'FoodController@edit', true);
$router->post('admin/food/update', 'FoodController@update', true);
$router->get('admin/food/delete', 'FoodController@delete', true);


//Admin/History
$router->get('admin/history', 'HistoryController@index', true);
$router->get('admin/history/create', 'HistoryController@create', true);
$router->post('admin/history', 'HistoryController@store', true);
$router->get('admin/history/edit', 'HistoryController@edit', true);
$router->post('admin/history/update', 'HistoryController@update', true);
$router->get('admin/history/delete', 'HistoryController@delete', true);



//API
$router->get('api/users', 'UsersController@apiIndex', true);
$router->get('api/time', 'UsersController@dateTime', true);
$router->get('api/me', 'UsersController@me', true);
$router->get('api/food', 'FoodController@apiIndex', true);
$router->get('api/cal', 'FoodController@apiGetCal', true);
