<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use App\DatabaseJson\Models\User;

    public function submit(Request $request){
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    }

    // public function submit(Request $request) {
    //     $this->validate($request, [
    //         'name' => 'required|string',
    //         'surname' => 'required|string',
    //         'email' => 'required|email',
    //     ]);

    //     $user = User::create([
    //         'name' => $request['name'],
    //         'surname' => $request['surname'],
    //         'email' => $request['email'],
    //     ]);
    //     echo $users = User::where('email','>', 'a')->paginate(10);
    // }
}
?>