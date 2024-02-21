<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use App\Models\NamaModel;


class TodolistController extends Controller
{

    public function index()
    {
        $todolists = Todolist::all();
        return view('todolist', compact('todolists'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);

        Todolist::create($data);
        return redirect()->route('todolist');

    }

    public function destroy(todolist $todolist)
    {
        $todolist->delete();
        return back();
    }

    public function update(Request $request, $id)
    {
        $todolists = Todolist::findOrFail($id);
        $todolists-> update([
            'content' => $request->input('content')
        ]);
        return response()->json([
            'message' => 'Data berhasil diupdate'
        ]);
    }


}
