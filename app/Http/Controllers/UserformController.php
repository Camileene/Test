<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
        ]);

        /*
          Add mail functionality here.
        */
        return response()->json(null, 200);
    }
}