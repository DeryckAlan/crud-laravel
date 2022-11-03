<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Post Product</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<form action="{{url('insert-product') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="row mt-3">
			<div class="col-md-6 mb-2">
				<label>Name</label>
				<input type="text" name="prodname">
			</div>
			<div class="col-md-6 mb-2">
				<label>Slug</label>
				<input type="text" name="slug">
			</div>
			<div class="col-md-6 mb-2">
				<label>Amout</label>
				<input type="number" name="amout">
			</div>
			<div class="col-md-6 mb-2">
				<label>Price</label>
				<input type="text" name="price">
			</div>
			<div class="col-md-6 mb-2">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</body>
</html>