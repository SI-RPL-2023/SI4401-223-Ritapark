@extends('partials.template')
@include('layout.contactus')
@section('content')

    <!--gallery block--->
    <div class="row">
        <div class="container">
        @foreach ($promos as $promo)
        <div class="col-sm-6 col-md-4" style="width: 34rem; border-radius: 20px; box-shadow: 2px 2px 16px 8px rgba(0,0,0,0.1); margin-right: 40px; margin-bottom: 40px; min-height: 450px;">
            <div class="thumbnail" style="border-style: none;">
                <div style="width: 100%; height: 230px; background: url({{ $promo->gambar_promo }}) center / cover; border-radius: 20px; margin-top: 10px; margin-bottom: 10px;"></div>
                <div class="caption">
                    <h4 style="font-family: 'Source Sans Pro', sans-serif; font-weight: bold;color: rgb(0, 0, 0);margin-bottom: 8px;">
                    {{ $promo->nama }}</h4>
                    <p class="text-primary" style="font-family: 'Source Sans Pro', sans-serif;">
                    {{ $promo->deskripsi }}</p>
                    <p style="font-family: 'Source Sans Pro', sans-serif; font-weight: bold;color: rgb(0, 0, 0); margin-top: 20px;">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-{{ $promo->id }}">
                            Lihat Selengkapnya
                        </button>
                    </p>
                </div>
            </div>
            <div class="modal fade" id="modal-{{ $promo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div style="width: 100%;height: 230px;background: url({{ $promo->gambar_promo }}) center / cover;border-top-left-radius: 20px;border-top-right-radius: 20px;position: relative;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div>
                                <h4 style="font-family: 'Source Sans Pro', sans-serif;font-weight: 700;color: rgb(0, 0, 0);margin-bottom: 8px;margin-top: 22px;">
                                    {{ $promo->nama }}</h4><br>
                                <h4 style="font-family: 'Source Sans Pro', sans-serif;font-weight: 700;color: rgb(0, 0, 0);margin-bottom: 8px;margin-top: 22px;">
                                    Kode Promo: {{ $promo->kode_promo }}</h4><br>
                                <br>
                                <p class="text-primary" style="font-family: 'Source Sans Pro', sans-serif;">
                                    {{ $promo->deskripsi }}<br></p><br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-primary d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center"
                            role="button" data-bss-hover-animate="pulse"
                            style="margin-top: 20px;background-primary;border-style: none;padding-top: 8px;padding-bottom: 8px;box-shadow: 2px 2px 8px rgba(117,117,117,0.71);"
                            href="{{ route('bookingPromo', $promo->kode_promo) }}">Gunakan Promo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        @endforeach
        </div>
    </div>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
@endsection