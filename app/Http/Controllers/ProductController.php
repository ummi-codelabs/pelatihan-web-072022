<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        echo 'ini controller product';
    }

    public function show($id)
    {
        echo 'ini product dengan id: ' . $id;
    }
}
