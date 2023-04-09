@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Produk</h4>
                    <p class="card-description">
                        Form ini digunakan untuk menambahkan Produk baru
                    </p>
                    <form action="{{ route('adm.wahana.store') }}" method="post" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Wahana</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Produk">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Deskripsi Wahana</label>
                            <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail3" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Kuota Wahana</label>
                            <input type="number" name="kuota" class="form-control" id="exampleInputPassword4" placeholder="Kuota">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Status Wahana</label>
                            <input type="text" name="status" class="form-control" id="exampleInputPassword4" placeholder="Status">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{ route('adm.wahana.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
