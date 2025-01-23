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


<h2>Brand Information</h2>
<p>Name: {{ $brands->name }} </p>

<p>Description: {{ $brands->description  }} </p>

</body>
</html>

@endsection