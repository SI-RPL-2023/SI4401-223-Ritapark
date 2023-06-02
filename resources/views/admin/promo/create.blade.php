@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Promo</h4>
                    <p class="card-description">
                        Form ini digunakan untuk menambahkan Promo baru
                    </p>
                    <form action="{{ route('adm.promo.store') }}" method="POST">
                        @csrf
                        @if(Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="nama">Nama Promo:</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi:</label>
                            <textarea name="deskripsi" class="form-control" rows="5" style="resize: vertical; height : 180px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_mulai">Tanggal Mulai:</label>
                            <input type="date" name="tanggal_mulai" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_selesai">Tanggal Selesai:</label>
                            <input type="date" name="tanggal_selesai" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="kode_promo">Kode Promo:</label>
                            <input type="text" name="kode_promo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="potongan">Potongan:</label>
                            <input type="number" name="potongan" class="form-control" required max="100" value="" required>
                            <small class="form-text text-muted">Potongan dalam "%". Jika input 10 maka akan menjadi 10%. Pastikan angka tidak melebihi 100.</small>
                        </div>
                        <div class="form-group">
                            <label for="kuota_promo">Kuota Promo:</label>
                            <input type="text" name="kuota_promo" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
