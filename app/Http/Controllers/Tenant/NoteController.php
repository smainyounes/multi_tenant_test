<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::latest()->get();
        return view('tenant.note', [
            'notes' => $notes,
        ]);
    }

    public function store(Request $request)
    {
        Note::create([
            'note' => $request->note,
        ]);

        return back();
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);

        $note->delete();

        return back();
    }
}
