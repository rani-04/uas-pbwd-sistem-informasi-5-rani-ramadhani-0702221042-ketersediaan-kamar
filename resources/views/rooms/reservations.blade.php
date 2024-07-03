<!DOCTYPE html>
<html>
<head>
    <title>Reservations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Reservations</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="room_id">Room</label>
            <select class="form-control" id="room_id" name="room_id" required>
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->room_number }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="patient_id">Patient</label>
            <select class="form-control" id="patient_id" name="patient_id" required>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="check_in_date">Check-in Date</label>
            <input type="date" class="form-control" id="check_in_date" name="check_in_date" required>
        </div>
        <div class="form-group">
            <label for="check_out_date">Check-out Date</label>
            <input type="date" class="form-control" id="check_out_date" name="check_out_date">
        </div>
        <button type="submit" class="btn btn-primary">Add Reservation</button>
    </form>

    <h2>Existing Reservations</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Room</th>
            <th>Patient</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->room->room_number }}</td>
                <td>{{ $reservation->patient->name }}</td>
                <td>{{ $reservation->check_in_date }}</td>
                <td>{{ $reservation->check_out_date ?? 'N/A' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
