<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use App\Notes;

class NotesController extends Controller
{
    
    public function index()
    {
        // $notes = Notes::all();
        $notes = Notes::paginate();
        return view('notes/index', compact('notes'));
    }

   
    public function create()
    {
        return view('notes/create');
        // return "Se creo la nota";
    }

   
    public function store()
    {
        $this->validate(request(), [
            'note' => ['required','max:200']
        ]);

        $dato = request()->only('note', 'title');

        Notes::create($dato);

        return Redirect::to('notas');
    }

    public function show($id)
    {
        // return view('notes/show', compact('id','test'));
        dd($id);
    }

}
