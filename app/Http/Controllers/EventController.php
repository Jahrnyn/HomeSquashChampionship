<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
            'datetime' => 'required',
            'court' => 'nullable',
            'opponent' => 'nullable',
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
            'datetime' => $incomingFields['datetime'],
            'court' => intval($incomingFields['court']),
            'opponent' => $incomingFields['opponent'],
            'location' => $incomingFields['location'],
        ]);

        Auth::user()->events()->save($event);

        return redirect('/')->with('success', "New event has been created!");
    }

    // Fetching Events:
    public function fetchUserEvents(){
        $events = Event::with(['user', 'opponentUser'])
            ->where(function ($query) {
                $query->where('user_id', auth()->user()->id)
                    ->orWhere('opponent', auth()->user()->username);
            })
            ->orderBy('datetime', 'asc') // Order events by date
            ->get();
    
        // Convert datetime strings to Carbon instances
        $events->transform(function ($event) {
            $event->datetime = Carbon::parse($event->datetime);
            return $event;
        });

        // Organize events by months
        $eventsByMonth = $events->groupBy(function ($event) {
            return $event->datetime->format('F'); // Group events by month name
        });
    
        return $eventsByMonth;
    }


}
