@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Booking</h4>
                    <p class="card-description">
                        <span>Data booking</span>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10%">
                                        No
                                    </th>
                                    <th>
                                        Ticket
                                    </th>
                                    <th>
                                        User
                                    </th>
                                    <th>
                                        Qty
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Bukti Pembayaran
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->status == 1 ? 'Success' : 'Pending' }}</td>
                                        <td><a href="{{ asset($item->bukti_pembayaran) }}" target="_blank">Lihat</a></td>
                                        <td>
                                            <form action="{{ route('adm.booking.konfirmasi', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-success">Konfirmasi</button>
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
