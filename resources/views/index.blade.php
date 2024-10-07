<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #F5F5F5">
<a href="{{route('buku.create')}}" class="btn btn-primary float-end m-4" 
    style="width: 200px; height : 50px"> Tambah buku</a>
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
            @foreach($buku as $data_buku)
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->Judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ 'Rp. '.number_format($buku->harga, 2, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
                <td>
                    @csrf
                    <a href="{{route('buku.edit', $buku->id)}}" class="btn btn-primary">Edit </a>
                </td>
                <td>
                    <form action="{{route('buku.delete', $buku->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin untuk menghapus?')" type="submit" class="btn btn-danger">
                             Hapus </button>
                    </form>
                </td>

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
