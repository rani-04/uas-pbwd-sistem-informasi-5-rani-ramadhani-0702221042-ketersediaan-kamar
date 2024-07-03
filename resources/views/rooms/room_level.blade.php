@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Level Ruangan</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Level</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <div class="form-group">
                                <label for="room_level">Room Level</label>
                                <select name="room_level" id="room_level" class="form-control" required>
                                    <option value="" disabled selected>Please select an item in the list</option>
                                    @foreach($levels as $level)
                                        <option value="{{ $level }}">{{ $level }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <tbody>
                                @foreach ($roomLevels as $roomLevel)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $roomLevel->nama }}</td>
                                        <td>{{ $roomLevel->deskripsi }}</td>
                                        <td>
                                            <a href="{{ route('room_levels.show', $roomLevel->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                            <a href="{{ route('room_levels.edit', $roomLevel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('room_levels.destroy', $roomLevel->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus level ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
