<?php

namespace App\Http\Controllers;

use App\Models\MoneyManagements;
use Database\Seeders\MoneyManagement;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;



class MoneyManagementController extends Controller
{
    public function index(Request $request)
    {
        $list = MoneyManagements::orderBy('category', 'desc')->orderBy('year', 'desc')->orderBy('month', 'desc')->get();

        //下記修正したら表示された
        //return view('todo_list.index', ['todo_lists', $todo_lists]);
        return view('money_management.index', ['list' => $list]);
    }

    public function create(Request $request)
    {
        //$list = MoneyManagements::all(); //DBからデータをすべて取り出す

        return view('money_management.create');
    }


    public function store(Request $request)
    {
        $model = new MoneyManagements();
        $model->year = $request->input('year');
        $model->month = $request->input('month');
        $model->category = $request->input('category');
        $model->kingaku = $request->input('kingaku');
        $model->comment = $request->input('comment');
        $model->save();

        return redirect()->route('money.toroku');
    }


    public function show($id)
    {
        $data = MoneyManagements::find(intval($id));

        return view('money_management.show', ['data' => $data]);
    }
}
