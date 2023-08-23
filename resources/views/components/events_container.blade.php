<div class="month-content">
    @foreach ($userEvents as $month => $events)
        <h2>{{ $month }}</h2>
        <div class="events-list">
                @foreach ($events as $event)
                    @php
                        $eventDate = new \DateTime($event->date);
                    @endphp
                    <div class="event">
                        {{ $event->datetime->format('m.d. l H:i') }} - Court: {{ $event->court }} - User: {{ $event->user->username }} - Opponent: {{ $event->opponentUser ? $event->opponentUser->username : 'No opponent' }}
                    </div>
                @endforeach
        </div>
    @endforeach
</div>
