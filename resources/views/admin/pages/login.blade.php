<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>

            <form action="{{route('admin.login.post')}}" method="post">
              @csrf

            <div class="form-outline mb-4">
              <input required name="email"type="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
              @error('email')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="form-outline mb-4">
              <input required name="password"type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
              @error('password')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>


            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            <hr class="my-4">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
 