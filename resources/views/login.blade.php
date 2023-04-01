@extends('layout.layout')
@include('layout.contactus')
@section('content')

<section class="vh-100" style="background-color: #f6f6f6;">
  <div class="h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow-lg" style="border-radius: 1rem;">
          <div class="row g-0 container-fluid">
            <div class="col-md-6">
              <img src="images/sky-drop.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%; width: 100%; object-fit: cover;" />
            </div>
            <div class="col-md-6">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="" method="post">
                  @csrf
                  <!-- <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div> -->

                  <!-- a -->

                  <h1 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">LOGIN</h1>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Email address</label>
                    <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                  {{-- <a class="small text-muted" href="#!">Forgot password?</a> --}}
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Belum memiliki akun? <a href=""
                      style="color: #393f81;">Klik disini</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>