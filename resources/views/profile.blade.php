@extends('partials.template')

@section('content')

<section id="Form" >
    <div class="container pt-5">
        <div class="container py-5 bg-light">
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                <h2 style="padding-bottom: 3vh; font-weight: bold;">Akun</h2>
                @if(session('berhasil'))
                    <div class="alert alert-success">
                      {{ session('berhasil') }}
                    </div>
                @endif
                <form>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="name">Username:</label>
                        <input type="text" class="form-control" id="name" value="{{ $user->username }}" disabled>
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" value="{{ $user->email }}" disabled>
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="phone">No HP:</label>
                        <input type="text" class="form-control" id="phone" value="{{ $user->phone_number }}" disabled>
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 2vh;">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" value="********" disabled>
                        <a class="help-block" style="color: #d9534f;" href="{{ route('resetpassword') }}">Klik disini untuk ubah password</a>
                    </div>
                    <a type="button" class="btn btn-danger btn-block" href="{{ route('profileubah') }}" >Ubah akun</a>
                    <a type="button" class="btn btn-block" style="border: 1px solid #d9534f; color: #d9534f;" href="{{ route('logout') }}">Keluar akun</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection