<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assets</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <section id="main" class="text-center">
      <div class="content">
        <h1 class="fw-medium mt-5 my-4">Save The World!</h1>
        <hr class="line border-2 m-auto my-4" width="120px" />
        <p class="desc">
          Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
          molestie consequat, vel illum dolore eu feugiat nulla facilisis at
          vero
        </p>
      </div>
    </section>
    <div class="d-flex gap-3 justify-content-center">
      <div class="card" style="width: 15rem; height: 15rem">
        <i class="fa-solid fa-house-flag h-50 m-2 text-success"></i>
        <div class="card-body">
          <h3 class="card-title text-center text-uppercase">discover</h3>
        </div>
      </div>
      <div class="card" style="width: 15rem; height: 15rem">
        <i class="fa-solid fa-volume-high h-50 m-2 text-success"></i>
        <div class="card-body">
          <h3 class="card-title text-center text-uppercase">Promote</h3>
        </div>
      </div>
      <div class="card" style="width: 15rem; height: 15rem">
        <i class="fa-solid fa-file-signature h-50 m-2 text-success"></i>
        <div class="card-body">
          <h3 class="card-title text-center text-uppercase">Investigate</h3>
        </div>
      </div>
      <div class="card" style="width: 15rem; height: 15rem">
        <i class="fa-solid fa-headset h-50 m-2 text-success"></i>
        <div class="card-body">
          <h3 class="card-title text-center text-uppercase">Support</h3>
        </div>
      </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
</body>
</html>
