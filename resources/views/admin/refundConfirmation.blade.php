@extends('partials.template')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <h2 class="text-center" style="margin-top: 30px; margin-bottom: 20px">Konfirmasi Refund Tiket</h2>
        @if ($refunds->isEmpty())
            <p>Tidak ada refund yang perlu dikonfirmasi saat ini.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Refund</th>
                        <th>Nama Tiket</th>
                        <th>Alasan Refund</th>
                        <th>Nama User</th>
                        <th>Email User</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($refunds as $refund)
                        <tr>
                            <td>{{ $refund->id }}</td>
                            <td>{{ $refund->nama_tiket }}</td>
                            <td>{{ $refund->alasan }}</td>
                            <td>{{ $refund->nama_user }}</td>
                            <td>{{ $refund->email_user }}</td>
                            <td>
                                <form action="{{ route('adm.refundconfirm', $refund->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="booking_id" value="{{ $refund->booking_id }}">
                                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
