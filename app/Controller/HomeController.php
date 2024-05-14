<?php

namespace WebLanjutan\PHP\MVC\DASAR\Controller;
use WebLanjutan\PHP\MVC\DASAR\App\View;

class HomeController
{
    function index(): void 
    {
        $model = [
            "title" => "PHP MVC",
            "content" => "Web Lanjutan PHP"
        ];

        View::render('Home/index', $model);
    }

    function hello(): void 
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Web Lanjutan PHP MVC";
    }

    function login(): void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $user = [

        ];

        $response = [
            "message" => "Login Sukses"
        ];
        // kirimkan response ke view
    }
}