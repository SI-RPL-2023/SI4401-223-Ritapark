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
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%; width: 100%; object-fit: cover;" />
            </div>
            <div class="col-md-6">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{route('loginS')}}" method="POST">
                  @csrf

                  <h1 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">LOGIN</h1>

                  @if(session('error'))
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                  @endif

                  @if(session('berhasil'))
                    <div class="alert alert-success">
                      {{ session('berhasil') }}
                    </div>
                  @endif
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Email address</label>
                    <input type="email" name="email" id="email" class="form-control email form-control-lg" required>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" name="password" id="password" class="form-control password form-control-lg" minlength="8" 
                    oninvalid="this.setCustomValidity('Password harus minimal 8 karakter')" oninput="this.setCustomValidity('')" required>
                    <a class="small text-muted" href="{{route('forgot')}}">Lupa password?</a>
                  </div>

                  <div class="button pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="login" value="Login">Login</button>
                  </div>

                  
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Belum memiliki akun? <a href="{{route('register')}}"
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