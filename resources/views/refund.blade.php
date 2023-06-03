@extends('partials.template')
@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <h2 class="text-center" style="margin-top: 30px; margin-bottom: 20px">Formulir Refund Tiket</h2>
        <form action="{{ route('refund.submit') }}" onsubmit="return showConfirmation()" method="POST">
            @csrf
            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <label for="nama" class="form-label mb-2" style="margin-bottom: 28px;">Nama
                        <span style="color: red;">*</span></label>
                    <br><br>
                    <label for="email" class="form-label mb-2" style="margin-bottom: 28px;">Email
                        <span style="color: red;">*</span></label>
                    <br><br>
                    <label for="tiket" class="form-label mb-2" style="margin-bottom: 28px;">Tiket yang ingin di refund
                        <span style="color: red;">*</span></label>
                </div>
                <div class="col-lg-4">
                    <input required type="text" class="form-control" name="nama" id="nama" value="{{ $user->name }}" readonly>
                    <br><br>
                    <input required type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" readonly>
                    <p class="text-muted">contoh: ritapark@gmail.com</p>
                    <br>
                    <select class="form-select" name="booking_id" aria-label="Default select example" required>
                        <option selected disabled>Pilih tiket anda</option>
                        @foreach($data as $b)
                            @if ($b->status == 1 || $b->status == 5)
                                <option value="{{ $b->id }},{{ $b->nama }}">{{ $b->nama }}, dengan jumlah {{ $b->qty }} tiket</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <label for="rekening" class="form-label mb-2" style="margin-bottom: 28px;">Nomor rekening / E-wallet
                        <span style="color: red;">*</span></label>
                </div>
                <div class="col-lg-4">
                    <input required type="number" class="form-control" name="rekening" id="rekening">
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <label for="metode" class="form-label mb-2" style="margin-bottom: 28px;">Nama bank / E-wallet
                        <span style="color: red;">*</span></label>
                </div>
                <div class="col-lg-4">
                    <input required type="text" class="form-control" name="metode" id="metode">
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <label for="namarekening" class="form-label mb-2" style="margin-bottom: 28px;">Nama pada rekening / E-wallet
                        <span style="color: red;">*</span></label>
                </div>
                <div class="col-lg-4">
                    <input required type="text" class="form-control" name="namarekening" id="metode">
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <label for="alasan" class="form-label mb-2" style="margin-bottom: 28px;">Alasan Refund Tiket
                        <span style="color: red;">*</span></label>
                </div>
                <div class="col-lg-4">
                    <textarea required class="form-control" name="alasan" id="alasan" rows="6" placeholder="Ketik di sini ..."></textarea>
                    <!-- <div class="mt-2" style="margin-top: 20px;">
                        <div class="form-check form-check-inline" style="display: inline; margin-right: 20px;">
                            <input class="form-check-input" type="checkbox" name="rating" id="inlineRadio1" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">Saya Setuju untuk merefund tiket</label>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-2"></div>
            </div>
            
            <div class="text-center" style="margin-top: 30px;">
                <button type="submit" class="btn btn-danger" style="width: 200px;">Ajukan Refund</button>
            </div>
        </form>
    </div>
@endsection

<script>
function showConfirmation() {
  if (confirm("Apakah Anda yakin ingin melakukan refund? Jika sudah melakukan refund maka tidak akan bisa dibatalkan")) {
    // Jika pengguna mengklik "OK" pada pesan konfirmasi, formulir akan dikirim
    return true;
  } else {
    // Jika pengguna mengklik "Batal" pada pesan konfirmasi, formulir tidak akan dikirim
    return false;
  }
}
</script>