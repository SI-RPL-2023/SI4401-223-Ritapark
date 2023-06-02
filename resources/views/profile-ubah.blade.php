@extends('partials.template')

@section('content')

<section id="Form" >
    <div class="container pt-5">
        <div class="container py-5 bg-light">
        
        <div class="container" style="margin-top: 2vh; margin-bottom: 5vh;">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                <h2 style="padding-bottom: 3vh; font-weight: bold;">Ubah Profile</h2>
                <form action="{{route('profileubahattempt')}}" method="POST">
                    @csrf
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" pattern="[A-Za-z]+"
                        oninvalid="this.setCustomValidity('Mohon hanya memasukkan huruf saja')" oninput="this.setCustomValidity('')"
                        required>
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="name">Username:</label>
                        <input type="text" class="form-control" name="username" value="{{ $user->username }}" required>
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="phone">No HP:</label>
                        <input type="text" class="form-control" name="phone" value="{{ $user->phone_number }}" pattern="^[0-9]{11,12}$"
                    oninvalid="this.setCustomValidity('Mohon masukkan nomor telpon dengan benar')" oninput="this.setCustomValidity('')" required>
                    </div>

                    <button class="btn btn-danger btn-lg btn-block" type="submit" name="ubah" value="ubah">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection