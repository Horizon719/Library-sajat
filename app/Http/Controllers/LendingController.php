<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lending;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LendingController extends Controller
{
    public function index() {
        return Lending::all();
    }

    public function show ($user_id, $copy_id, $start)
    {
        return Lending::where('user_id', $user_id)->where('copy_id', $copy_id)->where('start', $start)->first();
    }


    public function destroy($user_id, $copy_id, $start) {
        return Lending::where($user_id, $copy_id, $start)->delete();
    }

    public function store(Request $request) {
        $lending = new Lending();
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
    }

    public function lentedBooks(){
        return   Lending::with("lendings")->get();
    }

    public function countLentedBooks(){
        return   Lending::with("lendings")->count();
    }

    public function distinctLentedBooks(){
        return   Lending::with("lendings")->distinct("count_id")->count();
    }
}
