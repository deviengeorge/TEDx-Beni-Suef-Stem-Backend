<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    /**
     * Instantiate a new CommitteeController instance.
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
        return response(Committee::with('leaders')->with("members")->get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store a new Post
        $request->validate([
            "title" => "required",
        ]);

        $committee = Committee::create($request->only("title"));

        return response(["message" => "Committee Successfully Created", "committee" => $committee], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Committee::with('leaders')->with("members")->find($id);
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
        if (Committee::where('id', $id)->exists()) {
            $committee = Committee::find($id);
            $request->validate([
                "title" => "required"
            ]);
            $committee->update($request->only("title"));

            return response()->json([
                "message" => "committee With ID " . $id . " Was Updated Successfully",
                "committee" => $committee
            ], 200);
        } else {
            return response()->json([
                "message" => "Committee With ID " . $id . " Was Not Found",
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Committee $committee)
    {
        $committee->delete();
        return response(['message' => 'Committee Has Deleted Successfully']);
    }
}
