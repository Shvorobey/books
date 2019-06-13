<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $autor = \App\Autor::find($request->input('id'));
        $autor->delete();
        return back();
    }
}
