<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adm.dashboard') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Data</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adm.booking.index') }}">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Booking</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adm.ticket.index') }}">
          <i class="menu-icon mdi mdi-ticket-outline"></i>
          <span class="menu-title">Ticket</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adm.wahana.index') }}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Wahana</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adm.promo.index') }}">
          <i class="menu-icon mdi mdi-percent"></i>
          <span class="menu-title">Promo</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adm.refundConfirmation') }}">
          <i class="menu-icon mdi mdi-cash-refund"></i>
          <span class="menu-title">Refund</span>
        </a>
      </li>
    </ul>
  </nav>