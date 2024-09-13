<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #F5F5F5">

<div class="container mt-5">
    <h2 class="text-center">Daftar Buku</h2>

    <table class="table table-light table-striped-columns table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->Judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ 'Rp. '.number_format($buku->harga, 2, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="m-4 d-flex justify-content-around text-center">
        <div class="card" style="width: 18rem;">
            <h4 class="mt-4">{{$rowCount}}</h4>
            <div class="card-body">
              <p class="card-text">Total buku</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <h4 class="mt-4">{{ 'Rp. '.number_format($totalPrice, 2, ',', '.') }}</h4>
            <div class="card-body">
              <p class="card-text">Total Harga</p>
            </div>
          </div>
 
    </div>
</div>
</body>
</html>
