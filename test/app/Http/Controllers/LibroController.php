<?php

namespace App\Http\Controllers;

use App\Models\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function store(Request $request)
    {
        Libro::create($request->all()); //Cojo todos los campos
        return back(); //después de guardar vuelvo al formulario
    }

    public function show()
    {
        $libros = Libro::all();
        return view('show')->with('libros', $libros);
    }

    public function destroy($id)
    {
        if (request()->isMethod("DELETE")) {
            try {
                $libro = Libro::findOrFail($id);
                $libro->delete();
                return redirect(route("show"));
            } catch (Exception $ex) {
                dd($ex);
            }
        }
    }
}
