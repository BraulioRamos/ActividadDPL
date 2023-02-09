<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function saveDataLibro(Request $request, Libro $libro) {
        $libro->isbn = $request->isbn;
        $libro->titulo = $request->titulo;
        $libro->autores = $request->autores;
        $libro->genero = $request->genero;
        $libro->npaginas = $request->npaginas;
        $libro->precio = $request->precio;

        $image = $request->file('imagen');
        if (!file_exists(public_path($image))) {
            $image->move('uploads', $image->getClientOriginalName());
            $libro->imagen = "uploads/" . $image->getClientOriginalName();
        }
        return $libro;
    }

    public function index() {
        $listaLibros = Libro::all();
        return view('libros.index', compact('listaLibros'));
    }

    public function create() {
        return view('libros.create');
    }

    public function store(Request $request) {
        $request->validate([
            'isbn' => 'required',
            'titulo' => 'required',
            'autores' => 'required',
            'genero' => 'required',
            'npaginas' => 'required',
            'precio' => 'required',
            'imagen' => 'required|mimes:jpeg,png,jpg,gif'
        ]);

        $libro = new Libro();
        $libro = $this->saveDataLibro($request,$libro);
        $message = $libro->save();
        return redirect()->route('libros.index', compact('message'));
    }

    public function show(Libro $libro) {
        return view('libros.show', compact('libro'));
    }

    public function edit(Libro $libro) {
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, Libro $libro) {
        $libro = Libro::find($libro->id);
        $libro = $this->saveDataLibro($request, $libro);
        $libro->save();
        return redirect()->route('libros.index');
    }

    public function destroy(Libro $libro) {
        $libro = Libro::find($libro->id);
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
