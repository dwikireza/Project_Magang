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
                 <a href="{{ route('product.create') }}" class="btn btn-primary">Input Product baru</a>

                 <br />
                 <br />
                 <table class="table table-bordered table-hover table-striped">
                     <thead>
                         <tr>
                             <th>Nama Product</th>
                             <th>Jenis Product</th>
                             <th>Harga</th>
                             <th>OPSI</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($products as $product)
                             <tr>
                                 <td>{{ $product->name }}</td>
                                 <td>{{ $product->type }}</td>
                                 <td>{{ $product->price }}</td>
                                 <td>
                                     <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning"> Edit
                                     </a>
                                     <form method="post" action="{{ route('product.destroy', $product->id) }}">
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
