<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <link rel="shortcut icon" href="{{ asset('assets/imgs/UNRI.png') }}">
    <title>Login | SITEI</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('/assets/css/signin.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

  </head>

  <body>

    <div class="container overflow-hidden text-center">
  <div class="masuk row gx-5">
    <div class="col-lg mt-5">
     <div class=" gambar p-3 mt-5">
      <img src="assets/dist/img/unri.png" alt="" width="250">
      <h2 class=" mt-5 fw-bold">Sistem Informasi <br>Teknik Elektro dan Informatika</h2>
     </div>
    </div>
    <div class="col mt-5">
      <div class="kotak-masuk p-3 mt-5"><main class="form-signin w-100 m-auto">
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show float-left" role="alert">
          {{session('loginError')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <form class="form-login" action="{{ route('login.postlogin') }}" method="POST" class="text-center mt-5">
            @csrf

              <h1 class=" h3 mb-4 fw-bold">Selamat Datang!</h1>

              <div class="form-floating mt-5">
              <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}" placeholder="username" autofocus required>
              <label class="label-nim" for="username">NIP/NIM</label>
              @error('username')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
              @enderror
              </div>

              <div class="form-floating">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              </div>

              <button class="mt-4 w-100 btn btn-lg btn-success rounded-pill border" type="submit">Log in</button>
          </form>
        <small class=" kecil d-block text-center mt-3">Belum Terdaftar? <b>Hubungi Staff Jurusan!</b></small>
    </main></div>
    </div>
    <div class="footer-login mt-5">
  <strong>Dikembangkan oleh Prodi Teknik Informatika UNRI</strong>
</div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>
