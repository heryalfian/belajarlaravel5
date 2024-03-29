@extends('template')
@section('main')
    <h2>Hi,{{ Auth::user()->name }}</h2>
    <p>ini halaman user kaks :p</p>
@endsection
