<?php

namespace App\Http\Controllers;

use App\Book;
use App\Heading;
use Illuminate\Http\Request;

class BookNewController extends Controller
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
                'title' => 'required | max: 150 | string ',
                'image' => ' image | dimensions: min_width=370, min_height=330 |  file',
            ]);

            $book = new Book();
            $book->title = $request->input('title');

            $image = $request->image;
            if ($image) {
                $imageName = $image->getClientOriginalName();
                $image->move('images', $imageName);
                $book->img = 'http://books/images/' . $imageName;
            }
            $book->save();
        }

        return view('admin/book-new');
    }
}
