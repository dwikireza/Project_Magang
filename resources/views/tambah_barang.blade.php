<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD</title>
</head>
<body>

    @if($errors->any())
        <div class="alert alert-danger">
    @endif

    <div class="container">
        <div class="card mt-5">
            <div class="card=header text-center">
                CRUD Tambah Data - <strong>Tambah Data</strong>
            </div>
            <div class="card-body">
                <a href="/barang" class="btn btn-primary">KEMBALI</a>
                <br/>
                <br/>

                <form method="post" action="/barang/store">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <Label>Nama</Label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">

                        @if($errors->has('nama_barang'))
                            <div class="text-danger">
                                {{$error->first('nama_barang')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <input  type="text" name="jenis_barang" class="form-control" placeholder="Jenis barang">

                        @if($errors->has('jenis_barang'))
                            <div class="text-danger">
                                {{$errors->first('jenis_barang')}}
                            </div>
                            @endif
                    </div>

                    <div class="form-group">
                        <Label>Harga Barang</Label>
                        <input type="text" name="harga" class="form-control" placeholder="Harga..">

                        @if($errors->has('harga'))
                            <div class="text-danger">
                                {{$errors->first('harga')}}
                            </div>
                            @endif
                    </div>
                    <div>
                            @csrf
                            <div class="form-group">
                                <label for="gambar" class="form-label">input foto</label>
                                <input class="form-control" type="file" id="gambar" name="gambar">
                            </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="simpan">
                    </div>
            </div>
        </div>
    </div>
</body>
</html>
