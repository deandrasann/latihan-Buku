<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Edit Buku</h4>
    <form method="post" action="{{ route('buku.update', $buku->id) }}">
        @csrf
        {{-- value apa yang diisi, judul  --}}
        <div>Judul <input value="{{$buku->Judul}}" type="text" name="judul"></div>
        <div>Penulis <input value="{{$buku->penulis}}" type="text" name="penulis"></div>
        <div>Harga <input value="{{$buku->harga}}" type="text" name="harga"></div>
        <div>Tanggal Terbit <input type="date" name="tgl_terbit" value="{{$buku->tgl_terbit }}"></div>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ url('/buku') }}">Kembali</a>
</div>
</body>
</html>
