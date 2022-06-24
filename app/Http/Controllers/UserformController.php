<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\DatabaseJson\Models\User;
use Illuminate\Support\Facades\Storage;

class UserFormController extends Controller
{
    public function userSubmit(UserRequest $request) {
        $user = User::create([
            'name' =>  $request['name'],
            'surname' => $request['surname'],
            'email' =>  $request['email']
        ]);

        // $users = User::all();
        // $users dovrebbe contenere tutti i risultati, ma mostra soltanto oggetti vuoti nonostante il json si riempia correttamente.
        // Ho implementato un secondo metodo per avere comunque la response.

        $users = json_decode(file_get_contents(Storage::path('database-json/users.data.json')), true);
        return response() -> json($users, 200);
    }
}