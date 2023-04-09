@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Ticket</h4>
                    <p class="card-description">
                        <a href="{{ route('adm.ticket.create') }}" class="btn btn-primary">Add Ticket</a>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10%">
                                        No
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                    <th>
                                        Deskripsi
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td><a href="{{ route('adm.ticket.edit',$item->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('adm.ticket.hapus',$item->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Hapus</a></td>
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
