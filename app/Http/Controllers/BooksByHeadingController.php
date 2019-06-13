<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksByHeadingController extends Controller
{
    public function __invoke(Request $request, $key)
    {
        $heading = \App\Heading::where('key', '=', $key)->first();
        return view('books_by_heading', ['heading' => $heading]);
    }
}
