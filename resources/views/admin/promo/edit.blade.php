@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Produk</h4>
                    <p class="card-description">
                        Form ini digunakan untuk mengedit Produk
                    </p>
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('adm.promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $promo->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" style="resize: vertical; height : 180px;" required>{{ $promo->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_mulai">Tanggal Mulai</label>
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" value="{{ $promo->tanggal_mulai }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_selesai">Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" value="{{ $promo->tanggal_selesai }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kode_promo">Kode Promo</label>
                            <input type="text" name="kode_promo" id="kode_promo" class="form-control" value="{{ $promo->kode_promo }}" required>
                        </div>
                        <div class="form-group">
                            <label for="potongan">Potongan:</label>
                            <input type="number" name="potongan" class="form-control" required max="100" value="{{ $promo->potongan }}" required>
                            <small class="form-text text-muted">Potongan dalam "%". Jika input 10 maka akan menjadi 10%. Pastikan angka tidak melebihi 100.</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="kuota_promo">Kuota Promo</label>
                            <input type="text" name="kuota_promo" id="kuota_promo" class="form-control" value="{{ $promo->kuota_promo }}" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload Gambar :</label>
                            <input type="file" class="form-control h-100" id="image" name="image" accept=".jpg,.gif,.png,.webp">
                        </div>

                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
@endpush