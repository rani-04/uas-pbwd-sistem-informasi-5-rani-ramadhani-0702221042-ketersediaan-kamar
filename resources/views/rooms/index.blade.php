<!-- resources/views/rooms/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Existing Rooms</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Room Number</th>
                <th>Level</th>
                <th>Is Available</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->room_number }}</td>
                    <td>{{ $room->room_level }}</td>
                    <td>{{ $room->is_available ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
