<!-- resources/views/rooms/create.blade.php -->
@extends('layouts.app')

@section('title', 'Add Room')

@section('content')
    <h1>Add Room</h1>
    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="room_number">Room Number</label>
            <input type="text" name="room_number" id="room_number" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="room_level">Room Level</label>
            <select name="room_level" id="room_level" class="form-control" required>
                <option value="" disabled selected>Please select an item in the list</option>
                @foreach($levels as $level)
                    <option value="{{ $level }}">{{ $level }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="is_available">Is Available</label>
            <select name="is_available" id="is_available" class="form-control" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Room</button>
    </form>
@endsection
