<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Post Event form to database
    public function storeNewEvent(Request $request) {
        $incomingFields = $request->validate([
            'date_time' => 'required',
            'court' => 'required',
            'player2' => 'required',
        ]);

        $incomingFields['date_time'] = strip_tags($incomingFields['date_time']);
        $incomingFields['curt'] = strip_tags($incomingFields['curt']);
        $incomingFields['player1'] = auth()->id();
        $incomingFields['player2'] = strip_tags($incomingFields['player2']);

        Event::create($incomingFields);
        
        return "HEY";
    }
}
