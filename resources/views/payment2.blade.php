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
                            <div class="jumbotron fluid">
                            <h4>Silahkan scan qr code berikut</h4>
                            <div style="margin-top: 20px;">
                                <image src="images/qr.png" style="width: 95%;">
                            </div>
                            <div style="margin-top: 20px;">
                                <p style="font-weight: bold;">Nominal harus dibayarkan</p>
                                <p style="font-size: 1.8vw; font-weight: bold;">Rp. isi nominal</p>
                            </div>

                            <!-- if (metode pembayaran = gopay) -->
                            <div style="margin-top: 40px;" style="font-size: 0.9vw;">
                                <p>Cara Pembayaran</p>
                                <ol> 1. Buka aplikasi gojek </ol>
                                <ol> 2. Tekan tombol “Bayar” </ol>
                                <ol> 3. Scan qr code yang telah diberikan </ol>
                                <ol> 4. Masukkan sejumlah nominal yang telah ditentukan </ol>
                                <ol> 5. Lakukan pembayaran </ol>
                                <ol> 6. Screenshot bukti pembayaran berhasil </ol>
                            </div>
                            <!-- if (metode pembayaran = ovo) -->
                            <!-- <div style="margin-top: 40px;" style="font-size: 0.9vw;">
                                <p>Cara Pembayaran</p>
                                <ol> 1. Buka aplikasi ovo </ol>
                                <ol> 2. Klik menu ‘Scan’ </ol>
                                <ol> 3. Lakukan scan QR barcode </ol>
                                <ol> 4. Masukkan sejumlah nominal yang telah ditentukan </ol>
                                <ol> 5. Lakukan pembayaran </ol>
                                <ol> 6. Screenshot bukti pembayaran berhasil </ol>
                            </div> -->
                            <!-- else -->
                            <!-- <div style="margin-top: 40px;" style="font-size: 0.9vw;">
                                <p>Cara Pembayaran</p>
                                <ol> 1. Buka aplikasi linkaja </ol>
                                <ol> 2. Pilih “Bayar” </ol>
                                <ol> 3. Scan qr code yang telah diberikan </ol>
                                <ol> 4. Masukkan sejumlah nominal yang telah ditentukan </ol>
                                <ol> 5. Lakukan pembayaran </ol>
                                <ol> 6. Screenshot bukti pembayaran berhasil </ol>
                            </div> -->
                            <!-- endif -->
                            @if (Auth::user())
                            <form action="{{ route('booking.confirmation') }}" method="post">
                            @csrf
                                
                            
                            <div class="input-group" style="font-size: 1.2vw; margin-top: 40px; margin-bottom: 10px;">
                                <label class="form-label" for="customFile" style="margin-bottom: 20px;">Upload Bukti</label>
                                <input type="file" class="form-control" id="customFile" accept=".jpg,.gif,.png"/>
                            </div>
                            
                            
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-block" style="margin-top: 40px;" type="submit">Bayar</button>
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