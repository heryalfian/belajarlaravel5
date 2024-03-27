@extends('template');
@section('main')
    <h2>lengkapi data siswa</h2>
    <form action="{{ route('Siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('put');
        <div class="form-group">
            <label class="form-label">NIS</label>
            <input type="number" class="form-control" @error('nis') is-invalid @enderror name="nis"
                value="{{ $data->nis }}">
        </div>
        <div class="form-group">
            <label class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" @error('nama') is-invalid @enderror name="nama"
                value="{{ $data->nama }}">
        </div>
        <div class="form-group">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" @error('alamat') is-invalid @enderror name="alamat"
                value="{{ $data->alamat }}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
