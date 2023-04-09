<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Data</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adm.ticket.index') }}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Ticket</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adm.booking.index') }}">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Booking</span>
        </a>
      </li>
    </ul>
  </nav>