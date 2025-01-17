@extends('layouts.backend')

@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
          
            <div class="panel-body">
                <div class="row">


                    <div class="col-md-12">
                        <div class="card">


                            <div class="card-header bg-primary text-white">
    
                               <h6>Register New Category</h5>
    
    
                            </div>
    
                            <div class="card-body">
                                <div class="col-lg-12">

                                    <form action="{{ route('categories.store') }}" method="POST">
                                        @csrf

                                    <div class="row">


                                        <div class="col-md-6">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Description</label>
                                            <input type="text" name="description" class="form-control" placeholder="Description">
                                        </div>

                                    </div>

                                    {{-- <div class="row mt-4">


                                        <div class="col-md-6">
                                            <label for="">Selling Price</label>
                                            <input type="number" class="form-control" placeholder="0.00">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Stock Quantity</label>
                                            <input type="number" class="form-control" placeholder="0">
                                        </div>

                                    </div> --}}



                                    
                                    <button class="btn btn-primary mt-4">Submit</button>
                                   </form>
                                    
                                </div>
                            </div>
    
                        </div>
                    </div>

                  
                    

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
    
@endsection