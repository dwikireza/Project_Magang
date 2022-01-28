<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Barang</title>
</head>
<body>
    <div class="container">
        <header id="header" class="d-flex align-items-center">
            <div class="container d-flex align-items-center">

              <h1 class="logo me-auto"><a href="index.html">Toko Barang</a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
          </header><!-- End Header -->

          {{-- tabel card --}}
        <div class="container h-100" style="background: green; padding:20px">
            <div class="row align-items-center h-100">
                <div class="col-6 mx-auto">
                    <div class="card h-100 border-primary justify-content-center">
                @foreach($barang as $b)

                <div class="card" style="width: 18rem">
                    <img src="..." class="card-img-top" alt="Foto">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->nama_barang}}</h5>
                            <p class="card-text">{{ $b->jenis_barang}}</p>
                            <p class="card-text"> Harga {{ $b->harga}}</p>
                            <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                <br/>
                <br/>
            @endforeach
                    </div>
                </div>
            </div>
        </div>
      <br/>
    </div>
    <!-- Vendor JS Files -->


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
