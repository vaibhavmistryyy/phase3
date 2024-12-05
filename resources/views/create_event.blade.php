@extends('layouts.main')

@section('content')
    <h1>Create a New Event</h1>
    <form>
        <label for="event_name">Event Name:</label>
        <input type="text" id="event_name" name="event_name" required>
        
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>
        
        <label for="venue">Venue:</label>
        <input type="text" id="venue" name="venue" required>
        
        <button type="submit">Create Event</button>
    </form>
@endsection