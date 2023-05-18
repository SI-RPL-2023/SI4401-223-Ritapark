@extends('partials.template')

@section('content')

<section id="Form" >
    <div class="container pt-5">
        <div class="container py-5 bg-light">
        
        <div class="container" style="margin-top: 2vh; margin-bottom: 5vh;">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                <h2 style="padding-bottom: 3vh; font-weight: bold;">Ubah Profile</h2>
                <form>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name" value="isi db name">
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="name">Username:</label>
                        <input type="text" class="form-control" id="name" name="username" value="isi db username">
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="isi db email">
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label for="phone">No HP:</label>
                        <input type="tel" class="form-control" id="phone" name="hp" value="isi db nohp">
                    </div>

                    <a type="button" class="btn btn-danger btn-block" >Simpan</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection