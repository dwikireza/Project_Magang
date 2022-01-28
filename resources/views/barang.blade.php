 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
     <title>Toko_Barang</title>
 </head>
 <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <h1> CRUD Data Barang </h1>
                </div>
                <div class="card-body">
                <a href="/barang/tambah" class="btn btn-primary">Input Barang baru</a>

                    <br/>
                    <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($barang as $b)
                    <tr>
                        <td>{{ $b->nama_barang}}</td>
                        <td>{{ $b->jenis_barang }}</td>
                        <td>{{ $b->harga }}</td>
                        <td>{{ $b->foto }}</td>
                        <td>
                            <a href="/barang/edit/{{ $b->id }}" class="btn btn-warning"> Edit
                            </a>
                            <a href="/barang/hapus/{{ $b->id }}" class="btn btn-danger"> Hapus
                            </a>
                        </td>
                    </tr>
                     @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
 </body>
 </html>
