<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Copy;

class CopyController extends Controller
{
    public function index() {
        return Copy::all();
    }

    public function show($id) {
        return Copy::find($id);
    }

    public function destroy($id) {
        return Copy::find($id)->delete();
    }

    public function store(Request $request) {
        $copy = new Copy();
        $copy->publication = $request->publication;
        $copy->book_id = $request->book_id;
        $copy->status = $request->status;
        $copy->hardcovered = $request->hardcovered;
        $copy->save();
    }

    public function update(Request $request, $id) {
        $copy = Copy::find($id);
        $copy->publication = $request->publication;
        $copy->book_id = $request->book_id;
        $copy->status = $request->status;
        $copy->hardcovered = $request->hardcovered;
        $copy->save();
    }
}
