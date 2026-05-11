<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Notes;
use App\Models\Status;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $notes = Notes::paginate(3);
        $statuses = Status::all();

        return view('notes.index', compact('notes', 'statuses'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Notes::create($data);
        return redirect()->route('notes.index');
    }

    public function show(Notes $notes)
    {
        return view('notes.show', compact('notes'));
    }

    public function edit(Notes $notes)
    {
        $statuses = Status::all();
        return view('notes.edit', compact('notes', 'statuses'));
    }

    public function update(UpdateRequest $request, Notes $notes)
    {
        $data = $request->validated();
        $notes->update($data);
        return redirect()->route('notes.index', compact('notes'));
    }

    public function destroy(Notes $notes)
    {
        $notes->delete();
        return redirect()->route('notes.index', compact('notes'));
    }
}
