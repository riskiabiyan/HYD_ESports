@extends('master_auth')

@section('title', 'Login')

@section('konten')

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Halaman Login</h3>
          </div>
          <div class="card-body">
            <form action="/cek_login" method="POST">
                @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email Anda">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password Anda">
              </div>
              <br><br>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <a href="{{ url('/register') }}" class="btn btn-link btn-block">Belum punya akun? Daftar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection