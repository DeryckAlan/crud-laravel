<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products Crud</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
    <body class="antialiased">
        <center>
            <div class="col-md-12 mb-3 mt-3">
                <a href="{{ url('products') }}" class="btn btn-danger">Add Product</a>
            </div>
        </center>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>price</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->amout }}</td>
                    <td>{{ $item->price }}</td>
                    <td><a href="{{ url('edit-product/' . $item->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
                    <td><a href="{{ url('delete-product/' . $item->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
