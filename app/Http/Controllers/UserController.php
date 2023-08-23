<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Users';
        $viewData['subtitle'] = 'List of users';
        $viewData['users'] = User::all();

        return view('user.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $user = User::findOrFail($id);
        $viewData['title'] = $user['name'].' - Online Store';
        $viewData['subtitle'] = $user['name'].' - Product information';
        $viewData['user'] = $user;

        return view('user.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create User';

        return view('user.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'rol' => 'required',
            'address' => 'required',
            'wallet' => 'required',
        ]);
        User::create($request->only(['name', 'email', 'password', 'rol', 'address', 'wallet']));

        return back()->with("Usuario guardado");
    }

    public function delete($id){
        try{
            $sql = DB::delete("delete from users where id=$id");
        } catch (\Throwable $th){
            $sql = 0;
        }
        if ($sql == true){
            return back()->with('Correcto');
        } else {
            return back()->with('Incorrecto');
        }
    }
}
