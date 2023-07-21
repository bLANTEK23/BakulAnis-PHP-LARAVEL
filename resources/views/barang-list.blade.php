<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ url('/images/bagus.png') }}">
    <title>Bakul Anies - Barang List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <div class="text-white">
            <h1 class="text-center">Selamat datang Pada website Bakul Anies</h1>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <a class=" btn btn-primary" href="/login">
                  <img src="{{ url ('/images/enter.png') }}" class="img-fluid" width="24px">
                  <span class="hover-underline-animation">Login</span>
                </a>
              </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
      <div class="my-5">
        <div class="row ">
            @foreach ($barangs as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card justify-content-center" style="width: 20rem;">
                    <img src="{{ $item->gambar_barang}}" class="card-img-top" draggable="false">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->kode_barang}}</h5>
                      <p class="card-text">{{ $item->nama_barang}}</p>
                      <p class="card-text text-end">in stock</p>
                    </div>
                </div>
            </div>    
            @endforeach
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>