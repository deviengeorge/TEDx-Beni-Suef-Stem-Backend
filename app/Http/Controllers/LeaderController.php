<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Leader;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function addLeader(Request $request, $id)
    {
        if (Committee::where('id', $id)->exists()) {
            $committee = Committee::find($id);

            $request->validate([
                "title" => "required",
                "name" => "required",
                "image" => "required"
            ]);

            $leader = new Leader($request->only("title", "name", "image"));

            $committee->leaders()->save($leader);

            return response()->json([
                "message" => "Committee With ID " . $id . " Was Added a Member To It",
            ], 200);
        } else {
            return response()->json([
                "message" => "Committee With ID " . $id . " Was Not Found",
            ], 404);
        }
    }

    public function removeLeader(Request $request, $id)
    {
        if (Committee::where('id', $id)->exists()) {
            $request->validate([
                "leader_id" => "required",
            ]);

            $leader = Leader::find($request->input("leader_id"));

            $leader->delete();

            return response()->json([
                "message" => "Committee With ID " . $id . " Was Removed a Leader From It",
            ], 200);
        } else {
            return response()->json([
                "message" => "Committee With ID " . $id . " Was Not Found",
            ], 404);
        }
    }
}
