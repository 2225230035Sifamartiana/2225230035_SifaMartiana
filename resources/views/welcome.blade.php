<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
  <style>
   body {
      background-image: url("{{ asset('/images/onepiece.jpg')}}");
    }
    .card{
        width: 500px;
        height: 310px;
        margin-left: 400px;
        margin-top: 100px;
        background: #d3f1f5
      }
  </style>


      <div class="card">
        <div class="card-body">
          <h5 class="card-title">WEB PECINTA ANIME</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Sifa Martiana 2225230035</h6>
          <p class="card-text">Assalamualaikum warahmatullahi wabarakatuh, Web ini di buat untuk memenuhi project algoritma pemograman, sebelumnya ini adalah Web untuk mengumpulkan mahasiswa yang menyukai anime dari beberapa universitas, tentunya dari satu mahasiswa ke mahasiswa lainnya ada yang sama dengan judul anime yang di tonton ada juga yang tidak sama, untuk lebih jelasnya silahkan  klik buka aplikasi, Terima Kasih </p>
          <a href="{{ url('/student') }}" class="btn btn-primary">Buka Aplikasi</a>
        </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>