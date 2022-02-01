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
                <a href="{{ route('product.index') }}" class="btn btn-primary">KEMBALI</a>
                <br />
                <br />

                <form method="post"
                    action="{{ $isEdit ? route('product.update', $product->id) : route('product.store') }}">
                    {{ csrf_field() }}


                    @if ($isEdit)
                        {{ method_field('PUT') }}
                    @endif

                    <div class="form-group">
                        <Label>Nama</Label>
                        <input type="text" name="name" value="{{ $isEdit ? $product->name : '' }}"
                            class="form-control" placeholder="Nama Barang">

                        @if ($errors->has('name'))
                            <div class="text-danger">
                                {{ $error->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <input type="text" name="type" class="form-control"
                            value="{{ $isEdit ? $product->type : '' }}" placeholder="Jenis barang">
                        @if ($errors->has('type'))
                            <div class="text-danger">
                                {{ $errors->first('type') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <Label>Harga Barang</Label>
                        <input type="text" name="price" value="{{ $isEdit ? $product->price : '' }}"
                            class="form-control" placeholder="price..">
                        @if ($errors->has('price'))
                            <div class="text-danger">
                                {{ $errors->first('price') }}
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
