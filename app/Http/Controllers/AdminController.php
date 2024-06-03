<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function create()
    {
        return view('admin.create_user_modal', ['admin' => null]);
    }

    public function store(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'type' => 'required|string',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    dd('Passed validation'); // <-- Añade esta línea para verificar

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->type = $request->type;
    $user->save();

    return redirect()->route('admin.home')->with('success', 'Usuario creado exitosamente.');
    }

}
