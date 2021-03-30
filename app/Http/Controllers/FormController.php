<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("form");
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
        $request->validate([
            "name" => "required",
            "role" => "required",
            "image" => "required|url",
            "kind" => "required",
            "committee" => "required"
        ]);

        $res = Http::withHeaders([
            'password' => env("PASSWORD"),
        ])->post("https://tedx-beni-suef-api.herokuapp.com/api/committee/" . $request->input("committee") . "/add" . $request->input("kind"), [
            "name" => $request->input("name"),
            "role" => $request->input("role"),
            "image" => $request->input("image")
        ]);

        return $res;
    }
}
