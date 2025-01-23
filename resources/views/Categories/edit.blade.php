@extends('layouts.backend')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>

<h1>
    Category Registration Form
</h1>



<form method="POST" action="{{ route('categories.update', ['id' => $categories->id] ) }}">
@csrf

<div class="row">

    <div class="col-md-6">
        <div class="form-group">

<label for="">Name</label>
<input class="form-control" type="text" name="name" value="{{ $categories->name }}">

</div>
</div>

<div class="col-md-6">
    <div class="form-group">

<label for="">Description</label>
<input class="form-control" type="text" name="description" value="{{ $categories->description }}">

</div>
</div>
</div>


<button type="submit" class="btn btn-primary mt-2">
    Update
</button>






</form>
    
</body>
</html>

@endsection