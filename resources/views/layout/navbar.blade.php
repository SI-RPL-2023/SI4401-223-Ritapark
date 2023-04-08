<header>
        <nav class="d-flex flex-wrap align-items-center justify-content-between order-bottom px-5 navbar navbar-expand-lg" style="background-color:#FFFFFF">
            
            <a href="home.php" class="d-flex align-items-center mb-md-0 navbar-brand text-dark">
            <h1>Rita Park</h1>
            </a>

            <div class="collapse navbar-collapse mx-5 px-5 flex-wrap align-items-center justify-content-between" id="navbarColor02">
                <a class="d-flex align-items-center mb-2 mb-md-0 text-dark navbar-brand"></a>
                <ul class="navbar-nav col-12 col-md-auto justify-content-center mb-md-0">
                    <li class="nav-item"><a href="home.php" class="nav-link active px-2">Home</a></li>
                    <li class="nav-item"><a href="daftarHotel.php" class="nav-link active px-2">Tentang Kami</a></li>
                    <li class="nav-item"><a href="aboutUs.php" class="nav-link active px-2">Wahana</a></li>
                    <li class="nav-item"><a href="aboutUs.php" class="nav-link active px-2">Promo</a></li>
                    <li class="nav-item"><a href="aboutUs.php" class="nav-link active px-2">Promo</a></li>
                    
                </ul>
        
    
                <div class="nav-item">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="mx-3">
                            @if (!session('loggedin',FALSE))
                                <a role="button" class="btn btn-outline-danger px-4 my-3" style="--bs-btn-color: #F94156; " href="daftarPesanan.php">
                                    Daftar
                                </a>
                            @else
                                <button type="button" class="btn btn-outline-danger px-4 my-3" style="--bs-btn-color: #F94156; " data-bs-toggle="modal" data-bs-target="#daftar">
                                    Pesanan Saya
                                </button>
                            @endif
                        </li>
                        <li class="mx-3">
                            @if (session('loggedin',FALSE))
                                <div class="nav-item dropdown">
                                    <a class="btn btn-outline-danger px-4 my-3" style="--bs-btn-color: #F94156; "  data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['name']?></a>                                        
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="">Profil</a></li>
                                        <li><a class="dropdown-item" href="">Logout</a></li>
                                    </ul>
                                </div>
                            @else
                                <button type="button" class="btn btn-danger px-4 my-3" style="--bs-btn-color: #FFFFFF; " data-bs-toggle="modal" data-bs-target="#masuk">
                                    Masuk
                                </button>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>