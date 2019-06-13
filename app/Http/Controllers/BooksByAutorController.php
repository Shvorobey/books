<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksByAutorController extends Controller
{
    public function __invoke(Request $request, $key)
    {
        $autor = \App\Autor::where('key', '=',  $key)->first();
        return view('books_by_autor', ['autor' => $autor] );
    }
}
