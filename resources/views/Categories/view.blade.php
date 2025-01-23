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


<h2>Category Information</h2>
<p>Name: {{ $categories->name }} </p>

<p>Description: {{ $categories->description  }} </p>

</body>
</html>

@endsection