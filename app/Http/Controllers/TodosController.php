<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {

         $todos = Todo::all();
         return view('welcome',['todos'=>$todos]);

    }

    public function show(Todo $todo)
    {
        return view('show',['todo'=>$todo]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required|min:6|max:12',
            'description'=>'required'
        ]);
//        dd(\request()->all());
        /** @var Todo $todo */

        $todo = New Todo();

        $todo->name = \request()->name;
        $todo->description = \request()->name;
        $todo->completed = false;

        $todo->save();

        session()->flash('success','Todo create successfully');
        return redirect('/todos');
    }


    public function edit(Todo $todo)
    {
        return view('edit')->with('todo', $todo);
    }

    public function update(Request $request,Todo  $todo)
    {
        return $todo;
        $this->validate($request, [
            'name_form' => 'required|max:255',
            'description_form' => 'required'
        ]);

       $todo->name = $request->name_form;
       $todo->description = $request->description_form;
       $todo->save();

        session()->flash('success','اطلاعات با موفقیت تغییر یافت.');

       return redirect('/todos');

    }
    public function delete(Todo $todo)
    {
        $todo->delete();
        session()->flash('success','Todo Deleted successfully');
        return redirect('/todos');
    }

    public function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();

        session()->flash('success','Todo Completed Successfully');

        return redirect('/todos');
    }


}
