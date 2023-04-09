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
                    <form action="{{ route('adm.ticket.update',$data->id) }}" method="post" class="forms-sample" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Ticket</label>
                            <input type="text" value="{{ $data->nama }}" name="nama" class="form-control" id="exampleInputName1" placeholder="Produk">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Harga Ticket</label>
                            <input type="number" value="{{ $data->harga }}" name="harga" class="form-control" id="exampleInputEmail3" placeholder="Harga">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Deskripsi Ticket</label>
                            <input type="text" value="{{ $data->deskripsi }}" name="deskripsi" class="form-control" id="exampleInputPassword4" placeholder="Deskripsi">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{ route('adm.ticket.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
@endpush