<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        return User::all();
    }

    public function show($id) {
        return User::find($id);
    }

    public function destroy($id) {
        return User::find($id)->delete();
    }

    public function store(Request $request) {
        $user = new User();
        $user->author = $request->author;
        $user->title = $request->title;
        $user->password = Hash::make($request->password);
        $user->permission = $request->permission;
        $user->save();
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->author = $request->author;
        $user->title = $request->title;
        $user->password = Hash::make($request->password);
        $user->permission = $request->permission;
        $user->save();
    }
}
