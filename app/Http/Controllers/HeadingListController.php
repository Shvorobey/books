<?php

namespace App\Http\Controllers;

use App\Heading;
use Illuminate\Http\Request;

class HeadingListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $headings = Heading::all();

        return view('admin/headings-list', ['headings' => $headings]);
    }
}
