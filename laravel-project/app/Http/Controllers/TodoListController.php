<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList; //追記



class TodoListController extends Controller
{
    public function index(Request $request)
    {
        $todo_lists = TodoList::all(); //DBからデータをすべて取り出す

        //下記修正したら表示された
        //return view('todo_list.index', ['todo_lists', $todo_lists]);
        return view('todo_list.index', ['todo_lists' => $todo_lists]);
    }
}
