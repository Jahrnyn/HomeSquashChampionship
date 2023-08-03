<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

class EventController extends Controller
{
    // Post Event form to database
    public function storeNewEvent(Request $request)
    {
        $incomingFields = $request->validate([
            'next-date' => 'required',
            'next-time' => 'required',
            'court' => 'nullable',
            'opponent' => 'required|exists:users,username',
/*             'player3' => 'nullable',
            'player4' => 'nullable', */
            'location' => 'nullable',
        ]);

        //  checking if the opponent username exists in the database
        $opponentUSername = $incomingFields['opponent'];
        $userController = new UserController();

        if (!$userController->checkIfUserExists($opponentUSername)) {
            // User does not exist, add an error message to the session:
            return redirect()->back()->with('error', 'Sorry, that user is not registered. Please select an existing user! ')->withInput();
        }
        

        // Check if the 'court' value is present
        if (isset($incomingFields['court'])) {
            $court = intval($incomingFields['court']); // Convert the 'court' value to an integer
        } else {
            $court = null; // Set the value to null if it's not present
        }
        
        $incomingFields['player1'] = Auth::user()->name;

        $event = new Event([
            'date' => $incomingFields['next-date'],
            'time' => $incomingFields['next-time'],
            'court' => $court,
            'opponent' => $incomingFields['opponent'],
/*             'player3' => $incomingFields['player3'],
            'player4' => $incomingFields['player4'], */
            'location' => $incomingFields['location'],
        ]);

        Auth::user()->events()->save($event);

        return redirect('/')->with('success', "New event has been created!");
    }
}
