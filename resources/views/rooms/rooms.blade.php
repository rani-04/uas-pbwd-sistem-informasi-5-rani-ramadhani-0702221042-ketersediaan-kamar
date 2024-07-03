<!DOCTYPE html>
<html>
<head>
    <title>Rooms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Rooms</h1>
    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="room_number">Room Number</label>
            <input type="text" class="form-control" id="room_number" name="room_number" required>
        </div>
        <div class="form-group">
            <label for="room_level_id">Room Level</label>
            <select class="form-control" id="room_level_id" name="room_level_id" required>
                @foreach($roomLevels as $level)
                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="is_available">Is Available</label>
            <select class="form-control" id="is_available" name="is_available" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Room</button>
    </form>

    <h2>Existing Rooms</h2>
    <table class="table table-bordered">
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
                <td>{{ $room->roomLevel->level_name }}</td>
                <td>{{ $room->is_available ? 'Yes' : 'No' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
