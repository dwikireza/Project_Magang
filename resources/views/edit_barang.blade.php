<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card=header text-center">
                CRUD Tambah Data - <strong>Tambah Data</strong>
            </div>
            <div class="card-body">
                <a href="/barang" class="btn btn-primary">KEMBALI</a>
                <br/>
                <br/>

            <form method="post" action="/barang/update/{{ $barang->id }}">

                {{ csrf_field()}}
                {{ method_field('PUT')}}

                <div class="form-grop">
                    <Label>Nama Barang</Label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="nama_barang.." value="{{ $barang->nama_barang}}">
                    @if($errors->has('nama_barang'))
                        <div class="text-danger">
                            {{ $errors->first('nama_barang')}}
                        </div>)
                @endif
                </div>

                <div class="form-grop">
                    <Label>Jenis Barang</Label>
                    <input type="text" name="jenis_barang" class="form-control" placeholder="jenis_barang.." value="{{ $barang->jenis_barang}}">
                    @if($errors->has('jenis_barang'))
                        <div class="text-danger">
                            {{ $errors->first('jenis_barang')}}
                        </div>)
                @endif
                </div>

                <div class="form-grop">
                    <Label>Harga</Label>
                    <input type="text" name="harga" class="form-control" placeholder="Harga.." value="{{ $barang->harga}}">
                    @if($errors->has('harga'))
                        <div class="text-danger">
                            {{ $errors->first('harga')}}
                        </div>)
                @endif
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
            </div>

        </div>
    </div>
</body>
</html>
