<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheNote;

class NotesManagerCtrl extends Controller
{
    //
    public function index()
    {
        $AllNotes=TheNote::all(sortByDesc('created_at'));
        return view('ReadNote',['NotesCollection'=>$AllNotes]);
    }
    public function create()
    {
        return view('WriteNote');
    }
    public function store (Request $request )
    {
        $RequestedInfo = $request->all();
        $TheNote=new TheNote();
        $TheNote->NoteTitle = $RequestedInfo['NT'];
        $TheNote->NoteContent = $RequestedInfo['NC'];
        $TheNote->save();
        return redirect()->route('Memo.create');



    }
}
