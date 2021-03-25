<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function addMember(Request $request, $id)
    {
        if (Committee::where('id', $id)->exists()) {
            $committee = Committee::find($id);

            $request->validate([
                "title" => "required",
                "name" => "required",
                "image" => "required"
            ]);

            $leader = new Member($request->only("title", "name", "image"));

            $committee->members()->save($leader);

            return response()->json([
                "message" => "Committee With ID " . $id . " Was Added a Member To It",
            ], 200);
        } else {
            return response()->json([
                "message" => "Committee With ID " . $id . " Was Not Found",
            ], 404);
        }
    }

    public function removeMember(Request $request, $id)
    {
        if (Committee::where('id', $id)->exists()) {
            $request->validate([
                "member_id" => "required",
            ]);

            $member = Member::find($request->input("member_id"));

            $member->delete();

            return response()->json([
                "message" => "Committee With ID " . $id . " Was Removed a Member From It",
            ], 200);
        } else {
            return response()->json([
                "message" => "Committee With ID " . $id . " Was Not Found",
            ], 404);
        }
    }
}
