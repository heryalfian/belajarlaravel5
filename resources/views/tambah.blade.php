@extends('template');
@section('main')
    <h2>isikan data siswa</h2>
    <form action="{{ route('Siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="form-label">NIS</label>
            <input type="number" class="form-control" @error('nis') is-invalid @enderror name="nis"
                value="{{ old('nis') }}">
        </div>
        <div class="form-group">
            <label class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" @error('nama') is-invalid @enderror name="nama"
                value="{{ old('nama') }}">
        </div>
        <div class="form-group">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" @error('alamat') is-invalid @enderror name="alamat"
                value="{{ old('alamat') }}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
