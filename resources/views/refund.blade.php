@extends('partials.template')
@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <h2 class="text-center" style="margin-top: 30px; margin-bottom: 20px">Formulir Refund Tiket</h2>
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
                    <label for="tiket" class="form-label mb-2" style="margin-bottom: 28px;">Tiket yang ingin di refund<span
                            style="color: red;">*</span></label>
                </div>
                <div class="col-lg-4">
                    <input required type="email" class="form-control" name="email" id="email" placeholder="">
                    <p class="text-muted">contoh: ritapark@gmail.com</p>
                    <br>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih tiket anda</option>
                        <option value="1">Tiket 1</option>
                    </select>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <label for="testimoni_text" class="form-label mb-2" style="margin-bottom: 28px;">Alasan Refund Tiket <span
                            style="color: red;">*</span></label>
                    <br><br><br><br><br><br><br><br>
                    
                </div>
                <div class="col-lg-4">
                    <textarea required class="form-control" name="testimoni_text" id="testimoni_text" rows="6"
                        placeholder="Ketik di sini ..."></textarea>
                    <div class="mt-2" style="margin-top: 20px;">
                        <div class="form-check form-check-inline" style="display: inline; margin-right: 20px;">
                            <input class="form-check-input" type="checkbox" name="rating" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">Saya Setuju untuk merefund tiket</label>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="text-center" style="margin-top: 30px;">
                <button type="submit" class="btn btn-danger" style="width: 200px;">Ajukan Refund</button>
            </div>
        </form>
    </div>
@endsection
