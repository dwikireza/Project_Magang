<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD</title>
</head>

<body>

    @if ($errors->any())
        <div class="alert alert-danger">
    @endif

    <div class="container">
        <div class="card mt-5">
            <div class="card=header text-center">
                @if ($isEdit)
                    Perbarui Data
                @else
                    Tambah Data
                @endif
            </div>
            <div class="card-body">
                <a href="{{ route('typeproduct.index') }}" class="btn btn-primary">KEMBALI</a>
                <br />
                <br />

                <form method="post"
                    action="{{ $isEdit ? route('typeproduct.update', $typeproduct->id) : route('typeproduct.store') }}">
                    {{ csrf_field() }}


                    @if ($isEdit)
                        {{ method_field('PUT') }}
                    @endif

                    <div class="form-group">
                        <Label>Jenis Produk</Label>
                        <input type="text" name="type_product" value="{{ $isEdit ? $typeproduct->type_product : '' }}"
                            class="form-control" placeholder="jenis Barang">

                        @if ($errors->has('type_product'))
                            <div class="text-danger">
                                {{ $error->first('type_product') }}
                            </div>
                        @endif
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="{{ $isEdit ? 'Perbarui' : 'Simpan' }}">
                    </div>

            </div>
        </div>
</body>

</html>
