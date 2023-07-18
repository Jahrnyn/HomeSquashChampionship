<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    // Post Event form to database
    public function storeNewEvent(Request $request)
    {
        $incomingFields = $request->validate([
            'next-date' => 'required',
            'next-time' => 'required',
            'court' => 'nullable',
            'opponent' => 'nullable',
/*             'player3' => 'nullable',
            'player4' => 'nullable', */
            'location' => 'nullable',
        ]);

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

        return "Sucess";
    }
}
