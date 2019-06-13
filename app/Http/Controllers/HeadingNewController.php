<?php

namespace App\Http\Controllers;

use App\Heading;
use Illuminate\Http\Request;

class HeadingNewController extends Controller
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
                'title' => 'required | max: 30 | string ',
                'key' => 'required | max: 30 | min: 2 | string ',
            ]);

            $heading = new Heading();
            $heading->title = $request->input('title');
            $heading->key = $request->input('key');

            $heading->save();
        }

        return view('admin/heading-new');
    }
}
