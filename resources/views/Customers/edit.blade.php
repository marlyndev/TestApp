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
    Customer Registration Form
</h1>



<form method="POST" action="{{ route('customers.update', ['id' => $customers->id] ) }}">
@csrf

<div class="row">

    <div class="col-md-6">
        <div class="form-group">

<label for="">Customer's Name</label>
<input class="form-control" type="text" name="name" value="{{ $customers->name }}">

</div>
</div>

<div class="col-md-6">
    <div class="form-group">

<label for="">Email</label>
<input class="form-control" type="email" name="email" value="{{ $customers->email }}">

</div>
</div>
</div>

<div class="row mt-4">
<div class="col-md-6">
    <div class="form-group">

<label for="">Phone_Number</label>
<input class="form-control" type="number" name="phone" value="{{ $customers->phone }}">

</div>
</div>

<div class="col-md-6">
    <div class="form-group">

<label for="">Address</label>
<input class="form-control" type="text" name="address" value="{{ $customers->address }}">
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