<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Query;
use DB;

class QueriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$queries = Query::all(); // Returns all columns in a row
        //$queries = Query::orderBy('name', 'asc')->get(); // Returns the rows in asc/desc order
        //$queries = DB::select('SELECT id, name, message, created_at FROM queries'); // Selectively picking the fields via a query

        // Return a single row
        //$queries = Query::orderBy('name')->take(1)->get();

        // Pagination
        $num_rows = 10;
        $queries = Query::orderBy('name', 'asc')->paginate($num_rows);

        return view('pages.queries.queries')->with('queries', $queries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.queries.upsert')->with('query', new Query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $this->validate($request, [
            "name" => "required"
        ,   "message" => "required"
        ]);

        $query = new Query;
        $query->name = $request->input('name');
        $query->message = $request->input('message');
        $id = $query->save();

        return redirect(action('QueriesController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = Query::find($id);
        //$query = Query::where('id', 22)->get();

        return view('pages.queries.query')->with('query', $query);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query = Query::find($id);
        return view('pages.queries.upsert')->with('query', $query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
}
