@extends('admin')

@section('title', 'Dashboard')

@section('konten')



<h1>Ini adalah halaman Home</h1>

<form action="/logout" method="POST">
    @csrf
    <button class="btn btn-danger">Logout</button>
    </form>
    
@endsection