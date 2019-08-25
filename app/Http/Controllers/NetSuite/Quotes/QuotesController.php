<?php

namespace App\Http\Controllers\NetSuite\Quotes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;

class QuotesController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO: Lodge into the WS tracker/table the current session to monitor WS concurrent calls OR add a Retry

        // Show all quotes pertaining to the currently logged in customer
        // Call the RESTlet
        if ( defined('NS_WEBSERVICES_DOMAIN') ) {
            // TODO Check if a customer is logged in.  Otherwise, 
            //var_dump(function_exists("decrypt"));
            die(NS_WEBSERVICES_DOMAIN);
        } else {
            abort(500, "Web Services Domain not found");
        }

        // TODO: Release the session from the WS tracker.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
