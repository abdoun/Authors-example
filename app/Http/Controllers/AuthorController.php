<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use Auth;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAllAuthors()
    {
        $author = Auth::user()->author()->get();
        return response()->json($author);
        //return response()->json(Author::all());
    }

    public function showOneAuthor($id)
    {
        return response()->json(Author::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:authors',
            'location' => 'required|alpha'
        ]);

        if(Auth::user()->author()->Create($request->all())){
            //$author = Author::create($request->all());

            ///return response()->json($author, 201);
            return response()->json(['status' => 'success']);
        }else{
            return response()->json(['status' => 'fail']);
        }

    }

    public function update($id, Request $request)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Author::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
