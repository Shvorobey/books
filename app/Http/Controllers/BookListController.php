<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $books = Book::all();

        return view('admin/books-list', ['books' => $books]);
    }
}
