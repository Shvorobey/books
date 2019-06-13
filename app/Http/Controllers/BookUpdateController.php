<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->method() == 'POST') {
            $this->validate($request, [
                'title' => 'required | max: 100 | string ',
                'image' => 'image | dimensions: min_width=370, min_height=330 |  file',
            ]);

            $book = Book::find($request->input('id'));
            $book->title = $request->input('title');

            $img = $request->img;
            if ($img) {
                $imageName = $img->getClientOriginalName();
                $img->move('images', $imageName);
                $book->img = 'http://books/images/' . $imageName;
            }
            $book->save();

        } else {
            $book = Book::find($request->get('id'));
        }
        return view('admin.book-update', ['book' => $book]);
    }
}
