<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consultify</title>
  <link rel="shortcut icon" type="image.png" href="{{ asset('assets3/images/logos/c.png')}}" />
  <link rel="stylesheet" href="{{ asset('assets3/css/styles.min.css') }}">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets3/images/logos/logo.png" width="180" alt="">
                </a>
                
                @if(session()->has('success'))
                <div class="alert alert-success alert-dimsissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  </button>
                </div>
                @endif


                <p class="text-center">Registrasi</p>
                <form action="/register" method="post">
                  @csrf
                  <div class="mb-4">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
                      @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="eursamajor" value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email Address</label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="ursamajor@gmail.com" value="{{ old('email') }}">
                      @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  <div class="mb-4">
                    <label for="password" class="form-label ">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                    @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Sign up</button>
                </form>
                <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already Registered?</p>
                    <a class="text-primary fw-bold ms-2" href="/login">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets3/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets3/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>