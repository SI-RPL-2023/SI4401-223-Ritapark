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
                                <div class="panel-body"><h4>{{ $item->nama }} - <span class="text-success">{{ rupiah($item->harga) }}</span></h4></div>
                                <div class="panel-body" style="margin-top: -15px">{{ $item->deskripsi }}</div>
                                <div class="panel-body" style="margin-top: -15px">Qty : {{ $item->qty }}</div>
                                <div class="panel-body" style="margin-top: -15px"><a href="{{ route('ticket',$item->id) }}" class="btn btn-success">View</a></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
