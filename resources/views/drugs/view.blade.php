@extends('layouts.backend')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>


<h2>Drugs Information</h2>
<p>Generic Name: {{ $drugs->generic_name }} </p>

<p>Category: {{ $drugs->drug_category  }} </p>

<p>Brand: {{ $drugs->drug_brand }} </p>

<p>Buying Price: {{ $drugs->buying_price  }} </p>

<p>Selling Price: {{ $drugs->selling_price  }} </p>

<p>Stock Quantity: {{ $drugs->stock_quantity  }} </p>
    

</body>
</html>

@endsection