@extends('partials.template')

@section('content')
@php
    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
    
    }
@endphp
    <section class="booking-block">
        <div class="">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="jumbotron">
                            @if (Auth::user())
                                @if (session('success'))
                                    <div class="form-group">
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                        <input class="text-light" hidden name="kode_promo" value="{{$kode_promo ?? ''}}">
                                    </div>
                                @endif
                                @if (session('message'))
                                    <div class="form-group">
                                        <div class="alert alert-warning">
                                            {{ session('message') }}
                                        </div>
                                        <input class="text-light" hidden name="kode_promo" value="{{$kode_promo ?? ''}}">
                                    </div>
                                @endif
                                <form action="{{ route('payment2', $id) }}" method="POST">
                                @csrf
                                <h3>Payment</h3>
                                <div style="margin-top: 20px;"></div>
                                <div class="form-group">
                                    <label for="date">Nama : </label>
                                    <input type="hidden" value="{{ $id }}" name="id">
                                    <input type="text" disabled class="form-control" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="date">Ticket : </label>
                                    <input type="text" disabled class="form-control" value="{{ $data->nama ?? $tiket->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="date">Qty : </label>
                                    <input type="text" disabled class="form-control" value="{{ $data->qty }}">
                                </div>
                                <div class="form-group">
                                    <label for="total_harga">Total : </label>
                                    <input type="text" disabled class="form-control" id="total_harga" name="total_harga" value="{{ $data->total_harga }}">
                                </div>
                                @if (!session('success'))
                                    <div class="form-group">
                                        <label for="date">Promo Code : </label>
                                        <input id="promo_code" type="text" name="promo_code" class="form-control" value="">
                                        <input type="hidden" name="booking_id" value="{{ $data->id }}">
                                        <div class="text-danger" style="display:none;">Promo tidak ada, cek kembali kode promo</div>
                                        <div class="text-success" style="display:none;"></div>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="date">Payment via : </label><br>
                                    <input type="radio" name="payment" value ="Linkaja" required> Linkaja<br>
                                    <input type="radio" name="payment" value="gopay"> Gopay<br>
                                    <input type="radio" name="payment" value="OVO"> OVO<br>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-success btn-block" type="submit">Lanjutkan Pembayaran</button>
                                </div>
                                </form>
                            @else 
                                <h1>Anda Harus Mendaftar atau Login terlebih dahulu</h1>
                            @endif
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var promoCodeInput = document.getElementById('promo_code');
        var totalHargaInput = document.getElementById('total_harga');
        
        promoCodeInput.addEventListener('input', function() {
            console.log('JavaScript berjalan.');
            var promoCode = promoCodeInput.value;
            var hargaLuar = {{ $data->qty * ($data->harga ?? $tiket->harga) }};
            var promos = @json($promos);

            @foreach ($promos as $key => $promo)
                var promoCodeInputan = promoCodeInput.value;
                var totalHargaInputan = totalHargaInput.value;
                var hargaSkrg = hargaLuar;

                var promoKey = '{{ $key }}';
                var promoData = promos[promoKey];
                var kodePromo = promoData.kode_promo;
                var potongan = promoData.potongan;

                if (promoCode === kodePromo) {
                    // Kode promo ditemukan, lakukan sesuatu di sini
                    
                    var totalHarga = hargaSkrg - (hargaSkrg * potongan/100);
                    totalHargaInput.value = totalHarga;

                    // Tampilkan pesan sukses atau informasi potongan harga
                    var errorElement = document.querySelector('.text-danger');
                    var successElement = document.querySelector('.text-success');
                    errorElement.style.display = 'none';
                    successElement.style.display = 'block';
                    successElement.textContent = 'Promo berhasil. Anda hemat sebesar Rp. ' + (hargaSkrg * potongan/100);
                    
                    promoCodeInput.readOnly = true;
                }
            @endforeach
        });
    });
</script>

