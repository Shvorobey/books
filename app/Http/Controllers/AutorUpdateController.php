<?php

namespace App\Http\Controllers;

use App\Autor;
use Illuminate\Http\Request;

class AutorUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->method() == 'POST') {
            $this->validate($request, [
                'first_name' => 'required | max: 30 | string ',
                'last_name' => 'required | max: 30 | min: 2| string',
                'key'=> 'required | max: 50 | min: 2| string'
            ]);

            $autor = Autor::find($request->input('id'));
            $autor->first_name = $request->input('first_name');
            $autor->last_name = $request->input('last_name');
            $autor->key = $request->input('key');

            $autor->save();

        } else
        {
            $autor = Autor::find($request->get('id'));
        }
        return view('admin.autor-update', ['autor' => $autor]);
    }
}
