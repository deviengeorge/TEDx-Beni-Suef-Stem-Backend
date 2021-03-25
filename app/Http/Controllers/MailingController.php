<?php

namespace App\Http\Controllers;

use App\Models\Mailing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;

class MailingController extends Controller
{
    /**
     * Instantiate a new MailingController instance.
     */
    public function __construct()
    {
        $this->middleware('CheckPassword', ['except' => ['store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Mailing::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store a new Contact
        $request->validate([
            "email" => "required|email|max:100|unique:mailings,email",
        ]);

        $mailing = Mailing::create($request->only("email"));
        $email = $request->input('email');

        Http::post("https://api.telegram.org/bot" . env("TELEGRAM_BOT_API") . "/sendMessage", [
            "chat_id" => env("TELEGRAM_DEVIEN_CHAT_ID"),
            "text" => "<i><b>MAILING</b></i>\n\n<b>Email:</b> \t" . $email,
            "parse_mode" => 'HTML',
        ]);

        Http::post("https://api.telegram.org/bot" . env("TELEGRAM_BOT_API") . "/sendMessage", [
            "chat_id" => env("TELEGRAM_YOUSSEF_CHAT_ID"),
            "text" => "<i><b>MAILING</b></i>\n\n<b>Email:</b> \t" . $email,
            "parse_mode" => 'HTML',
        ]);

        return response(["message" => "Successfully Created", "mailing" => $mailing], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Mailing::find($id);
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
        if (Mailing::where('id', $id)->exists()) {
            $contact = Mailing::find($id);
            $request->validate([
                "name" => "required|max:100",
                "email" => [
                    "required",
                    "email",
                    Rule::unique('contacts')->ignore($contact->id),
                    "max:100"
                ],
                "subject" => "required|max:150",
                "message" => "required|max:750",
            ]);
            $contact->update($request->only("name", "email", "subject", "message"));

            return response()->json([
                "message" => "Contact With ID " . $id . " Was Updated Successfully",
                "contact" => $contact
            ], 200);
        } else {
            return response()->json([
                "message" => "Contact With ID " . $id . " Was Not Found",
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response(['message' => 'Contact Has Deleted Successfully']);
    }
}
