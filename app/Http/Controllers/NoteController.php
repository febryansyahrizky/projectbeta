<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $notes = $request->user()->notes()->get();
        return response()->json($notes);
    }

    public function store(Request $request)
    {
        $note = $request->user()->notes()->create($request->all());
        return response()->json($note);
    }

    public function show(Request $request, $id)
    {
        $note = $request->user()->notes()->findOrFail($id);
        return response()->json($note);
    }

    public function update(Request $request, $id)
    {
        $note = $request->user()->notes()->findOrFail($id);
        $note->update($request->all());
        return response()->json($note);
    }

    public function destroy(Request $request, $id)
    {
        $note = $request->user()->notes()->findOrFail($id);
        $note->delete();
        return response()->json($note);
    }
}
