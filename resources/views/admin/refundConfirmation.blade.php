@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif (session('warning'))
                        <div class="alert alert-warning">{{ session('warning') }}</div>
                    @endif
                    <h4 class="card-title">Refund</h4>
                    @if ($refunds->isEmpty())
                        <p>Tidak ada refund yang perlu dikonfirmasi saat ini.</p>
                    @else
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID Refund</th>
                                    <th>Nama Tiket</th>
                                    <th>Alasan Refund</th>
                                    <th>Nama User</th>
                                    <th>Email User</th>
                                    <th>Nomor Rekening </th>
                                    <th>Nama Bank/E-wallet</th>
                                    <th>Nama pada rekening </th>
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
                                        <td>{{ $refund->rekening }}</td>
                                        <td>{{ $refund->metode }}</td>
                                        <td>{{ $refund->nama_rekening }}</td>
                                        <td>
                                            @if ($refund->is_confirmed == 0)
                                            <form action="{{ route('adm.refundconfirm', $refund->id) }}" onsubmit="return showConfirmation()" method="POST">
                                                @csrf
                                                <input type="hidden" name="booking_id" value="{{ $refund->booking_id }}">
                                                <button type="submit" class="btn btn-primary btn-block w-100">Konfirmasi</button>
                                                
                                            </form>
                                            <form action="{{ route('adm.refundtolak', $refund->id) }}" onsubmit="return showConfirmation()" method="POST">
                                                @csrf
                                                <input type="hidden" name="booking_id" value="{{ $refund->booking_id }}">
                                                <button type="submit" class="btn btn-danger btn-block w-100 mt-2">Tolak</button>
                                            </form>
                                            @elseif ($refund->is_confirmed == 2)
                                                <button type="button" class="btn btn-danger text-light" disabled>Refund ditolak</button>
                                            @else
                                                <button type="button" class="btn btn-success text-light" disabled>Telah dikonfirmasi</button>
                                            @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div><div class="container">
    </div>
@endsection

<script>
function showConfirmation() {
  if (confirm("Apakah Anda yakin? Jika sudah dilakukan maka tidak akan bisa dibatalkan")) {
    // Jika pengguna mengklik "OK" pada pesan konfirmasi, formulir akan dikirim
    return true;
  } else {
    // Jika pengguna mengklik "Batal" pada pesan konfirmasi, formulir tidak akan dikirim
    return false;
  }
}
</script>