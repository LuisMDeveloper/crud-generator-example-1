<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Author;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AuthorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $author = Author::paginate(5);

        return view('author.index', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Author::create($request->all());

        Session::flash('flash_message', 'Author added!');

        return redirect('author');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $author = Author::findOrFail($id);

        return view('author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $author = Author::findOrFail($id);

        return view('author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $author = Author::findOrFail($id);
        $author->update($request->all());

        Session::flash('flash_message', 'Author updated!');

        return redirect('author');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Author::destroy($id);

        Session::flash('flash_message', 'Author deleted!');

        return redirect('author');
    }

}
