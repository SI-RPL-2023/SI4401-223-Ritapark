<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ! Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />

    <title>Register</title>
  </head>

  <section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="images/wahana.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form action="{{ route('register.action') }}" method="post">
                    @csrf
                    <!-- <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Logo</span>
                    </div> -->
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
  
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
                        <input type="password" id="form2Example22" name="password_confirmation" class="form-control"
                            placeholder="" />
                      </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                    </div>
  
                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="login.html"
                        style="color: #393f81;">Login Here</a></p>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>