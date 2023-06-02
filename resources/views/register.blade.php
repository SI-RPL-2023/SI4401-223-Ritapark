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
                    <label class="form-label" for="fullname">Nama Lengkap</label>
                    <input type="text" id="fullname" name="name" class="form-control"
                      placeholder="" pattern="[A-Za-z]+"
                      oninvalid="this.setCustomValidity('Mohon hanya memasukkan huruf saja')" oninput="this.setCustomValidity('')"required>
                  </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Email</label>
                    <input type="email" id="form2Example11" name="email" class="form-control"
                      placeholder="" required>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Username</label>
                    <input type="text" id="form2Example11" name="username" class="form-control"
                      placeholder="" required>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="notelp">Nomor Telpon</label>
                    <input type="text" id="notelp" name="hp" class="form-control" placeholder="" pattern="^[0-9]{11,12}$"
                    oninvalid="this.setCustomValidity('Mohon masukkan nomor telpon dengan benar')" oninput="this.setCustomValidity('')" required>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="" minlength="8"
                    oninvalid="this.setCustomValidity('Password harus minimal 8 karakter')" oninput="this.setCustomValidity('')" required>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="password1">Konfirmasi Password</label>
                    <input type="password" id="password1" name="password1" class="form-control"
                        placeholder="" minlength="8" required>
                  </div>

                  <div class="button pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="register" value="Register">Register</button>
                  </div>

                  {{-- <a class="small text-muted" href="#!">Forgot password?</a> --}}
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Sudah memiliki akun? <a href="{{route('login')}}"
                      style="color: #393f81;">Klik disini</a></p>
                </form>
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="toastPassword-salah" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#FFFF00"></rect>
                            </svg>
                            <strong class="me-auto">Alert</strong>
                        </div>
                        <div class="toast-body">
                          Password dan konfirmasi password tidak sama
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
</section>

<script>
  const passwordInput = document.getElementById('password');
  const confirmPasswordInput = document.getElementById('password1');
  const confirmPasswordError = document.getElementById('confirmPasswordError');

  confirmPasswordInput.addEventListener('input', () => {
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;
    if (confirmPassword.length >= 8) {  
      if (password !== confirmPassword) {
        const toast = new bootstrap.Toast(document.getElementById('toastPassword-salah'));
        toast.show();;
      } else {
        const toast = new bootstrap.Toast(document.getElementById('toastPassword-salah'));
        toast.hide();
      }
    }
  });
</script>