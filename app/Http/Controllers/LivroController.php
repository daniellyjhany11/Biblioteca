<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\livro;
use Illuminate\Support\Facades\Auth;


class LivroController extends Controller
{
    public function index()
    {
        $livros = Auth::user()->livros;
        $livros = Livro::paginate(10);
        return view('dashboard', compact('livros'));
    }

    //public function show(Livro $livro)
    //{
    //    return view('livros.show', compact('livro'));
    //} DA ARYANNE

    public function create()
    {
        return view('livros_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'nullable',
            'edicao' => 'nullable',
            'editora' => 'nullable',
        ]);

        Auth::user()->livros()->create($request->all());

        return redirect()->route('dashboard');
    }

    public function edit(Livro $livro)
    {
        if ($livro->user_id != Auth::id()) {
            return redirect()->route('dashboard');
        }
        return view('livros_edit', compact('livro'));
    }

    public function update(Request $request, Livro $livro)
    {
        if ($livro->user_id != Auth::id()) {
            return redirect()->route('dashboard');
        }

        $request->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'nullable',
            'edicao' => 'nullable',
            'editora' => 'nullable',
        ]);

        $livro->update($request->all());

        return redirect()->route('dashboard');
    }

    public function destroy(Livro $livro)
    {
        if ($livro->user_id != Auth::id()) {
            return redirect()->route('dashboard');
        }

        $livro->delete();

        return redirect()->route('dashboard');
    }
}
