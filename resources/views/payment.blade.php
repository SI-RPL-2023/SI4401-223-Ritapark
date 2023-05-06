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
                            <form action="{{ route('booking.confirmation') }}" method="post">
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
                                <input type="text" disabled class="form-control" value="{{ $data->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="date">Qty : </label>
                                <input type="text" disabled class="form-control" value="{{ $data->qty }}">
                            </div>
                            <div class="form-group">
                                <label for="date">Total : </label>
                                <input type="text" disabled class="form-control" value="{{ $data->qty * $data->harga }}">
                            </div>
                            <div class="form-group">
                                <label for="date">Payment via : </label><br>
                                <input type="radio" name="payment"> Linkaja<br>
                                <input type="radio" name="payment"> Gopay<br>
                                <input type="radio" name="payment"> OVO<br>
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
