<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookDeliteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $book = \App\Book::find($request->input('id'));
        $book->delete();
        return back();
    }
}
