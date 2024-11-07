<?php

namespace App\Controllers;

class ViewController
{
    public function index()
    {
        return RenderController::render("Home");
    }

    public function register()
    {
        return RenderController::render("Register");
    }

    public function login()
    {
        return RenderController::render("Login");
    }

    public function fetch()
    {
        return RenderController::render("Fetch");
    }

    public function delete()
    {
        return RenderController::render("Delete");
    }
}
