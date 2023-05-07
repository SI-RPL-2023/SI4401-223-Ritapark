@extends('partials.template')
@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <h2 class="text-center" style="margin-top: 30px; margin-bottom: 20px">Formulir Testimoni</h2>
        <form action="{{ route('testimoni.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="nama_depan" class="form-label mb-2" style="margin-bottom: 15px;">Nama Lengkap</label>
                        <input required type="text" class="form-control" name="nama_depan" id="nama_depan"
                            placeholder="">
                        <p class="text-muted">Nama Depan <span style="color: red;">*</span></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="nama_belakang" class="form-label mb-2" style="margin-bottom: 28px;"></label>
                        <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="">
                        <p class="text-muted">Nama Belakang</p>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <label for="email" class="form-label mb-2" style="margin-bottom: 28px;">Email <span
                            style="color: red;">*</span></label>
                    <br><br>
                    <label for="tanggal" class="form-label mb-2" style="margin-bottom: 28px;">Tanggal <span
                            style="color: red;">*</span></label>
                </div>
                <div class="col-lg-4">
                    <input required type="email" class="form-control" name="email" id="email" placeholder="">
                    <p class="text-muted">contoh: ritapark@gmail.com</p>
                    <br>
                    <input required type="date" class="form-control" name="tanggal" id="tanggal" placeholder="">
                    <p class="text-muted">contoh: 06/15/2022</p>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <label for="testimoni_text" class="form-label mb-2" style="margin-bottom: 28px;">Testimoni Anda <span
                            style="color: red;">*</span></label>
                    <br><br><br><br><br><br><br><br>
                    <label for="rating" class="form-label mb-2" style="margin-bottom: 28px;">Rating <span
                            style="color: red;">*</span></label>
                </div>
                <div class="col-lg-4">
                    <textarea required class="form-control" name="testimoni_text" id="testimoni_text" rows="6"
                        placeholder="Ketik di sini ..."></textarea>
                    <div class="mt-2" style="margin-top: 20px;">
                        <div class="form-check form-check-inline" style="display: inline; margin-right: 20px;">
                            <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline" style="display: inline; margin-right: 20px;">
                            <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline" style="display: inline; margin-right: 20px;">
                            <input class="form-check-input" type="radio" name="rating" id="inlineRadio3"
                                value="3">
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline" style="display: inline; margin-right: 20px;">
                            <input class="form-check-input" type="radio" name="rating" id="inlineRadio4"
                                value="4">
                            <label class="form-check-label" for="inlineRadio4">4</label>
                        </div>
                        <div class="form-check form-check-inline" style="display: inline; margin-right: 20px;">
                            <input class="form-check-input" type="radio" name="rating" id="inlineRadio5"
                                value=" 5">
                            <label class="form-check-label" for="inlineRadio5">5</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="text-center" style="margin-top: 30px;">
                <button type="submit" class="btn btn-danger" style="width: 200px;">Kirim</button>
            </div>
        </form>
    </div>
@endsection
