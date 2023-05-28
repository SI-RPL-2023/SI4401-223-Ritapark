@extends('partials.template')

@section('content')

<section id="Form" >
    <div class="container pt-5">
        <div class="container py-5 bg-light">
        
        <div class="container" style="margin-top: 2vh; margin-bottom: 20vh;">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                <h2 style="padding-bottom: 3vh; font-weight: bold;">Ubah Password</h2>
                <form action="{{route('resetattempt')}}" method="POST">
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label class="form-label" for="password">Password</label>                        
                        <input type="password" class="form-control" id="password" name="password" minlength="8"
                        oninvalid="this.setCustomValidity('Password harus minimal 8 karakter')" oninput="this.setCustomValidity('')" required>
                    </div>
                    <div class="form-group" style="padding-top: 0.5vh; padding-bottom: 0.5vh;">
                        <label class="form-label" for="password1">Konfirmasi Password</label>
                        <input type="password" id="password1" name="password1" class="form-control"
                        minlength="8" required>
                        <small id="confirmPasswordError" class="text-danger" style="display: none;">Password dan konfirmasi password tidak sama</small>
                    </div>

                    <button class="btn btn-danger btn-block" type="submit" name="ubah" value="ubah">Ubah</button>
                </form>
                
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
        confirmPasswordError.style.display = 'block';
      } else {
        confirmPasswordError.style.display = 'none';
      }
    }
  });
</script>
@endsection

