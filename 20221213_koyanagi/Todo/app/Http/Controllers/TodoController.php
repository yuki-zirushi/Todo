<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

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
