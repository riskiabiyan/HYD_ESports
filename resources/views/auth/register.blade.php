@extends('master_auth')

@section('title','Register')
    
@section('konten')


<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Halaman Register</h3>
          </div>
          <div class="card-body">
            <form action="/simpanuser" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username Anda">
                  </div>
                  <div class="form-group">
                    <label for="no_hp">Nomor HP</label>
                    <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan Nomor HP Anda">
                  </div>
                  <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" name="role" id="role" placeholder="Masukkan role Anda">
                  </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email Anda">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password Anda">
              </div>
              <br><br>
              <button type="submit" class="btn btn-primary btn-block">Daftar</button>
              <a href="{{ url('/login') }}" class="btn btn-link btn-block">Sudah punya akun? Login</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    
@endsection