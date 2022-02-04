<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Toko_Product</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h1> CRUD Data Product </h1>
            </div>
            <div class="card-body">
                <a href="{{ route('typeproduct.create') }}" class="btn btn-primary">Input Product baru</a>

                <br />
                <br />
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>

                            <th>Jenis Product</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($typeproduct as $type )
                            <tr>
                                <td>{{ $type->type_product }}</td>
                                <td>
                                    <a href="{{ route('typeproduct.edit', $type->id) }}" class="btn btn-warning"> Edit
                                    </a>
                                    <form method="post" action="{{ route('typeproduct.destroy', $type->id) }}">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </form>
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
