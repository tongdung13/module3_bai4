<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = [
          '0' => [
              'id' => 1,
              'name' => 'dung',
              'email' => 'hoahuongduong@gmail.com'
          ],
            '1' => [
                'id' => 2,
                'name' => 'hiu',
                'email' => 'hiu@gmail.com'
            ],
            '2' =>  [
                'id' => 3,
                'name' => 'doi',
                'email' => 'doi@gmail.com'
            ]

        ];
        return view('tasks.list', compact('tasks'));
    }
}
