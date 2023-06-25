<?php

namespace App\Http\Controllers;

use App\Models\MoneyManagements;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;



class MoneyManagementController extends Controller
{
    public function index(Request $request)
    {
        $list = MoneyManagements::all(); //DBからデータをすべて取り出す

        //下記修正したら表示された
        //return view('todo_list.index', ['todo_lists', $todo_lists]);
        return view('money_management.index', ['list' => $list]);
    }

    public function create(Request $request)
    {
        $list = MoneyManagements::all(); //DBからデータをすべて取り出す

        //下記修正したら表示された
        //return view('todo_list.index', ['todo_lists', $todo_lists]);
        return view('money_management.create', ['list' => $list]);
    }


    public function store(Request $request)
    {
        $model = new MoneyManagements();
        $model->month = $request->input('month');
        $model->category = $request->input('category');
        $model->kingaku = $request->input('kingaku');
        $model->comment = $request->input('comment');
        $model->save();

        return redirect()->route('money.toroku');
    }
}
