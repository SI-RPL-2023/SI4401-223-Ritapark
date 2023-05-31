@extends('admin.partials.template')

@section('content')
    <div class="row">
      <div class="col-sm-12">
        <h2>Dashboard</h2>
        <div class="d-flex">
          <div class="">
            <div class="d-flex" style="margin-top: 33px">
              <div class="card shadow">
                <div class="card-body">
                  <h4 class="card-title text-muted">Penjualan hari ini</h4>
                  <h2 class="fw-bold text-success">{{ $tickets }}</h2>
                </div>
              </div>
              <div class="card shadow" style="margin-left: 35px; width: 506px;">
                <div class="card-body">
                  <h4 class="card-title text-muted">Total Pendapatan</h4>
                  <h2 class="fw-bold text-success">Rp.{{ $total }}</h2>
                </div>
              </div>
              <div class="card shadow" style="margin-left: 35px">
                <div class="card-body">
                  <h4 class="card-title text-muted">Total Rating</h4>
                  <h2 class="fw-bold text-warning">{{ $rating }}/5.0</h2>
                </div>
              </div>
            </div>
            <div class="d-flex" style="margin-top: 70px">
              <div class="card shadow">
                <div class="card-body">
                  <h4 class="card-title text-muted">Rata-rata tiket (hari)</h4>
                  <h2 class="fw-bold text-success"></h2>
                </div>
              </div>
              <div class="card shadow" style="margin-left: 31px">
                <div class="card-body">
                  <h6 class="card-title text-muted">Statistic</h6>
                  <h4 class="card-title fw-bolder text-muted">Tiket terbanyak</h4>
                  <h2 class="fw-bold text-success"></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="card shadow" style="margin-top: 33px; margin-left: 38px">
            <div class="card-body">
              <h4 class="card-title text-muted">Rata-rata tiket (hari)</h4>
              <h2 class="fw-bold text-success"></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  
@endsection