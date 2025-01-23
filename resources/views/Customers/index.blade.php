@extends('layouts.backend')

@section('content')

            
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">


                        <div class="card-header bg-primary text-white">

                            <p> Customers List</p>
                        </div>

                        <div class="card-body">
                            <div class="panel-body">

                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                    <thead>
                                        <tr>
                                            <th>Customer's Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                       
                                        @foreach($customers as $data)
    
                                        <tr>
    
                                            <td>
                                               {{ strtoupper($data->name) }}
                                            </td>
    
                                            <td>
                                              {{ $data->email }} 
                                            </td>
    
                                            <td>
                                                {{ $data->phone }}
                                            </td>
    
                                            <td>
                                                {{ $data->address }}
                                            </td>

                                            <th>
                                                <a href="{{ route('customers.view', ['id' => $data->id]) }}">
                                                    <button class="btn btn-primary btn-sm">View</button> 

                                                <a href="{{ route('customers.edit', ['id' => $data->id]) }}">
                                                    <button class="btn btn-primary btn-sm">Edit</button> 

                                                <a href="{{ route('customers.delete', ['id' => $data->id]) }}">
                                                     <button class="btn btn-primary btn-sm">Delete</button> 
                                            </th>
                                        </tr>

                                        @endforeach
    
                                    </tbody>
    
                                </table>
                             
                            </div>
                        </div>

                    </div>

                   
                </div>
                <!-- /.col-lg-12 -->
            </div>


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   
@endsection