<?php

namespace App\Http\Controllers;

use App\Models\Thank;
use Illuminate\Http\Request;

class ThanksController extends Controller
{
    /**
     * Instantiate a new ThanksController instance.
     */
    public function __construct()
    {
        $this->middleware('CheckPassword', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Thank::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "content" => "required",
        ]);

        $thank = Thank::create($request->only("name", "content"));

        return response(["message" => "Successfully Created", "thanks" => $thank], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Thank::find($id);
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
        if (Thank::where('id', $id)->exists()) {
            $thank = Thank::find($id);
            $request->validate([
                "name" => "required",
                "content" => "required",
            ]);
            $thank->update($request->only("name", "content"));

            return response()->json([
                "message" => "Thank With ID " . $id . " Was Updated Successfully",
                "thank" => $thank
            ], 200);
        } else {
            return response()->json([
                "message" => "Thank With ID " . $id . " Was Not Found",
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thank  $thank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thank $thank)
    {
        $thank->delete();
        return response(['message' => 'Thank Has Deleted Successfully']);
    }
}
