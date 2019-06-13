<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class SingleBookController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $book = Book::where('id', $id)->first();

        return view('single_book', ['book' => $book,]);
    }
}
