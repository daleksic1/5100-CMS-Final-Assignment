<?php
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}

function view($viewname, $data = []) {
    extract($data);
    return require "views/{$viewname}.view.php";
}

function redirect($path) {
    header("Location: {$path}");
}

function get_header(){
    return require "views/partials/header.view.php";
}

function get_plain_header(){
    return require "views/partials/plain-header.view.php";
}

function get_footer(){
    return require "views/partials/footer.view.php";
}


function get_headerAdmin(){
    return require "views/admin/partials/header.view.php";
}



function get_footerAdmin(){
    return require "views/admin/partials/footer.view.php";
}




function json($data){
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode($data);
}