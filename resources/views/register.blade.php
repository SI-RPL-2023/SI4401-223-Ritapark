@extends('layout.layout')
@section('content')

<section class="vh-100" style="background-color: #f6f6f6;">
  <div class="h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow-lg" style="border-radius: 1rem;">
          <div class="row g-0 container-fluid">
            <div class="col-md-6">
              <img src="images/sky-drop.jpg"
                alt="register form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%; width: 100%; object-fit: cover;" />
            </div>
            <div class="col-md-6">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{route('registerS')}}" method="POST">
                  @csrf

                  <h1 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">Register</h1>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Fullname</label>
                    <input type="text" id="form2Example11" name="name" class="form-control"
                      placeholder="" />
                  </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Email</label>
                    <input type="email" id="form2Example11" name="email" class="form-control"
                      placeholder="" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Username</label>
                    <input type="text" id="form2Example11" name="username" class="form-control"
                      placeholder="" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">No Telp</label>
                    <input type="text" id="form2Example11" name="hp" class="form-control"
                      placeholder="" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="form2Example22" name="password" class="form-control"
                        placeholder="" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Konfirmasi Password</label>
                    <input type="password" id="form2Example22" name="password1" class="form-control"
                        placeholder="" />
                  </div>

                  <div class="button pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="register" value="Register">Register</button>
                  </div>

                  {{-- <a class="small text-muted" href="#!">Forgot password?</a> --}}
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Sudah memiliki akun? <a href="{{route('login')}}"
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