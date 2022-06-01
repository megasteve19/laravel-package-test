<?php

namespace LaravelPackageTest\Http\Controllers;

use Illuminate\Http\Request;

class SayHello extends Controller
{
    public function index(string $name)
    {
        return view('laravelpackagetest::say-hello', ['name' => $name]);
    }
}
