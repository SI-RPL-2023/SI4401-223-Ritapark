@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Promo</h4>
                    <p class="card-description">
                        <a href="{{ route('adm.promo.create') }}" class="btn btn-primary">Add Promo</a>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>Nama</th>
                                    <th style="width: 15%">Deskripsi</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Status</th>
                                    <th>Kode Promo</th>
                                    <th>Potongan (persen)</th>
                                    <th>Kuota Promo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($promos as $p)
                                    <tr>
                                        <<td>{{ $p->id }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->deskripsi }}</td>
                                        <td>{{ $p->tanggal_mulai }}</td>
                                        <td>{{ $p->tanggal_selesai }}</td>
                                        <td>{{ $p->status }}</td>
                                        <td>{{ $p->kode_promo }}</td>
                                        <td>{{ $p->potongan }}</td>
                                        <td>{{ $p->kuota_promo }}</td>
                                        <td>
                                            <a href="{{ route('adm.promo.edit', $p->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('adm.promo.destroy', $p->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this promo?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
