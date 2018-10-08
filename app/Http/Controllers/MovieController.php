<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
    	$Movies = Movie::get();
    	return view('movies.index')->with('Movies',$Movies);
    }

    public function create()
    {
    	return view('movies.create');
    }

    public function show($id)
    {
    	$Movie = Movie::find($id);
    	return view('movies.show')->with('Movie',$Movie);
    }


    public function store(Request $request)
    {
    	$store = new Movie;
    	$store->MovieName = $request->input('MovieName');
    	$store->MovieDescription = $request->input('MovieDescription');
    	$store->save();

    	return redirect()->to('/movies');
    }

    public function edit($id)
    {
    	$Movie = Movie::find($id);
    	return view('movies.edit')->with('Movie',$Movie);
    }

    public function update($id, Request $request)
    {
    	$update = Movie::find($id);
    	$update->MovieName = $request->input('MovieName');
    	$update->MovieDescription = $request->input('MovieDescription');
    	$update->save();

    	return redirect()->to('/movies');
    }

    public function destroy($id)
    {
    	$destroy = Movie::where('MovieID',$id)->delete();
    	return redirect()->back();
    }
}
