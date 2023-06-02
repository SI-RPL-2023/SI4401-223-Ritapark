@extends('partials.template')

@section('content')
@php
    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
    
    }
@endphp
    <section class="booking-block">
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div style="margin-top: 20px;"></div>
                        <label for="date">Ticket Kamu:</label>
                        @foreach ($data as $item)
                        <div class="form-group">
                            <div class="panel panel-default">
                                <div class="panel-body"><h4>{{ $item->nama }} - <span class="text-success">{{ rupiah($item->total_harga) }}</span></h4></div>
                                <div class="panel-body" style="margin-top: -15px">{{ $item->deskripsi }}</div>
                                <div class="panel-body" style="margin-top: -15px">Qty : {{ $item->qty }}</div>
                                <div class="" style="margin-top: -15px; display: flex; justify-content: space-between; align-items: center; padding:15px;">
                                    @if ($item->status == 0)
                                        <a href="{{ $item->status ? route('ticket',$item->id) : '' }}" class="btn {{ $item->status ? 'btn-success active' : 'btn-default' }}" disabled>View</a>
                                    @elseif ($item->status == 1)
                                        <a href="{{ $item->status ? route('ticket',$item->id) : '' }}" class="btn {{ $item->status ? 'btn-success active' : 'btn-default' }}">View</a>
                                    @else
                                        <a href="{{ $item->status ? route('tiketBayar',$item->id) : '' }}" class="btn {{ $item->status ? 'btn-warning active' : 'btn-default' }}">Bayar</a>
                                    @endif
                                    <p class="d-flex justify-content-between align-items-center">
                                        @if ($item->status == 0)
                                            <span class="text-muted h5" style="text">Menunggu Konfirmasi</span>
                                        @elseif ($item->status == 1)
                                            <span class="text-success h5" style="text">Tiket telah terbit</span>
                                        @else
                                            <span class="text-muted h5">Menunggu Pembayaran</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
...