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
                        @if (Auth::user())
                        <form action="{{ route('booking.store') }}" method="post">
                        @csrf
                        <h3>Booking Tiket</h3>
                        <div style="margin-top: 20px;"></div>
                        <div class="form-group">
                            <label for="date">Date Booking:</label>
                            <input type="date" name="date" required class="form-control" placeholder="date">
                        </div>
                        @foreach ($data as $item)
                        <div class="form-group">
                            <label for="date">Ticket:</label>
                            <div class="panel panel-default">
                                <div class="panel-body"><h4>{{ $item->nama }} - <span class="text-success">{{ rupiah($item->harga) }}</span></h4></div>
                                <div class="panel-body" style="margin-top: -15px">{{ $item->deskripsi }}</div>
                                <div class="qty-{{ $item->id }}">
                                    <div class="panel-body" style="margin-top: -15px"><button class="btn btn-primary beli" data-id="{{ $item->id }}">Beli</button></div>
                                </div>  

                            </div>
                        </div>
                        @endforeach
                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">Booking</button>
                        </div>
                        </form>
                        @else 
                        <h3>Anda Harus Mendaftar atau Login terlebih dahulu</h3>
                        <a href="{{ route('login') }}" class="btn btn-danger">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $('.beli').click(function() {
            var id = $(this).data('id')
            console.log(id)
            $(this).remove();
            $('.qty-'+id).append('<input type="text" class="form-control" style="width:60px;margin-top: -15px;margin-left:15px;margin-bottom:15px" name="qty" value="1" placeholder="Qty">')
            $('.qty-'+id).append('<input type="hidden" name="ticket_id" value="'+id+'" placeholder="ticket">')
        })
    </script>
@endpush