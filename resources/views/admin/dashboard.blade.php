@extends('admin.partials.template')

@section('content')
    <div class="row">
      <div class="col-sm-12">
        <h2>Dashboard</h2>
          <div class="">
            <div class="d-flex" style="margin-top: 33px">
              <div class="card shadow">
                <div class="card-body">
                  <h4 class="card-title text-muted">Penjualan hari ini</h4>
                  <h2 class="fw-bold text-success">{{ $tickets }}</h2>
                </div>
              </div>
              <div class="card shadow" style="margin-left: 35px; width:65%">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title text-muted">Total Pendapatan</h4>
                    <div class="dropdown">
                      <button class="btn btn-secondary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Periode
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('adm.dashboard') }}">Bulan Ini</a></li>
                        <li><a class="dropdown-item" href="{{ route('adm.dashboard', ['periode' => 'bulan_lalu']) }}">Bulan Lalu</a></li>
                      </ul>
                    </div>
                  </div>
                  <h2 class="fw-bold text-success">Rp.{{ $reports->pendapatan }}</h2>
                </div>
              </div>
              <div class="card shadow" style="margin-left: 35px">
                <div class="card-body">
                  <h4 class="card-title text-muted">Total Rating</h4>
                  <h2 class="fw-bold text-warning">{{ $rating }}/5.0</h2>
                </div>
              </div>
            </div>
            <div class="card shadow" style="margin-top: 33px;">
              <div class="card-body">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Wahana Favorit
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                      <div class="accordion-body">
                        <div>
                          <h3>1. Roller Coaster</h3>
                          <h4>200 Favorite</h4>
                        </div>
                        <div style="margin-top: 30px">
                          <h3>2. Bianglala</h3>
                          <h4>200 Favorite</h4>
                        </div>
                        <div style="margin-top: 30px">
                          <h3>3. Kora Kora</h3>
                          <h4>200 Favorite</h4>
                        </div>
                        <div style="margin-top: 30px">
                          <h3>4. Skydrop</h3>
                          <h4>200 Favorite</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    @livewire('admin.dashboard')
@endsection