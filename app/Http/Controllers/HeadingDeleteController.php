<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadingDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $heading = \App\Heading::find($request->input('id'));
        $heading->delete();
        return back();
    }
}
