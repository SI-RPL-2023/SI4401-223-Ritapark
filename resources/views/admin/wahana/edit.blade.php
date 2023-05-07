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
                    <form action="{{ route('adm.wahana.update',$data->id) }}" method="post" class="forms-sample" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Wahana</label>
                            <input type="text" value="{{ $data->nama }}" name="nama" class="form-control" id="exampleInputName1" placeholder="Produk">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Deskripsi Wahana</label>
                            <input type="text" value="{{ $data->deskripsi }}" name="deskripsi" class="form-control" id="exampleInputPassword4" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Kuota Wahana</label>
                            <input type="text" value="{{ $data->kuota }}" name="kuota" class="form-control" id="exampleInputPassword4" placeholder="Kuota">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Status Wahana</label>
                            <input type="text" value="{{ $data->status }}" name="status" class="form-control" id="exampleInputPassword4" placeholder="Status">
                        </div>
                        <div class="form-group">
                            <label for="image">Foto Wahana</label>
                            <input type="file" class="form-control" name="image" id="image" accept=".jpg,.gif,.png"/>
                        </div> 
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{ route('adm.wahana.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
@endpush