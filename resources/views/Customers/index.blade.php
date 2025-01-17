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

                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Customer's Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
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