<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $data = [
            'content' => 'テスト',
        ];
        return view('index', $data);
    }
}
