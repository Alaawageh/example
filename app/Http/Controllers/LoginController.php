<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
class LoginController extends Controller
{
    public function index(){
        return view ('login');
    }
    public function loginSubmit(Request $request){
       $name= $request->input('name');
       $age= $request->input('age');
        $login = Login::create([
            'name' => $name,
            'age' => $age,
        ]);
    return view('dashboard', compact('name','age'));
    }
}
